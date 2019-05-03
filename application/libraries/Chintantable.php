<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Chintantable
{
    private $CI;
    public $onlyelementjson = [];
    public function __construct()
    {
        // Assign by reference with "&" so we don't create a copy
        $this->CI = &get_instance();
    }
    public function createelement($field, $sort, $header, $alias)
    {
        $elements = new stdClass();
        $elements->field = $field;
        $elements->sort = $sort;
        $elements->header = $header;
        $elements->alias = $alias;
        array_push($this->onlyelementjson, $elements);

        return $this->onlyelementjson;
    }
    public function query($pageno = 1, $maxlength = 20, $orderby = '', $orderorder = '', $search = '', $elements, $from, $where = ' WHERE 1 ', $group = '', $having = '', $order = '', $baseurl = 'http://localhost/puneetdemo/index.php/site/index', $options = array())
    {
        if($elements == "")
        {
            $elements=$this->onlyelementjson;
        }
        /*         QUERY
                    1. SELECT
                    2. FROM
                    3. WHERE
                    4. GROUP
                    5. HAVING
                    6. ORDER
                    7. LIMIT
                $element->field;
                $element->alias;
                $element->sort;
                $element->filter;
                $element->filterfunction;*/
        if ($pageno == '') {
            $pageno = 1;
        }
        $pageno = intval($pageno);
        if ($maxlength == '') {
            $maxlength = 20;
        }
        $maxlength = intval($maxlength);
        $selectquery = 'SELECT ';
        $fromquery = ' '.$from.' ';
        $wherequery = ' '.$where.' AND ( ';
        $groupquery = ' '.$group.' ';
        $havingquery = ' '.$having.' ';
        $orderquery = ' ORDER BY ';
        $maxlength = intval($maxlength);
        $startingfrom = ($pageno - 1) * $maxlength;
        $searchquery = '';
        $limitquery = " LIMIT $startingfrom,$maxlength";
        foreach ($elements as $element) {
            $selectquery .= ' '.$element->field.' ';
            if (isset($element->alias) && $element->alias != '') {
                $selectquery .= ' AS `'.$element->alias.'` ';
            }
            $selectquery .= ', ';
            if (isset($element->filter) && $element->filter != '') {
                $wherequery .= ' `'.$element->field.'` '.$element->filterfunction." '".$element->filter."' AND ";
            }
            if (isset($element->sort) && $orderby != '' && $orderorder != '' && ($orderby == $element->alias || $orderby == $element->field)) {
                $orderquery .= ' `'.$orderby.'` '.$orderorder.', ';
                $element->sort = $orderorder;
            }
            if ($search != '') {
                $searchquery .= ' '.$element->field." LIKE '%".$this->CI->db->escape_like_str($search)."%' OR ";
            }
        }
        $searchquery .= ' 0 ';
        $selectquery .= ' 1 ';
        if ($search == '') {
            $wherequery .= ' 1 ) ';
        } else {
            $wherequery .= " 1 ) AND ($searchquery)";
        }
        $orderquery .= ' 1 ';
        $return = new stdClass();
        $return->querycomplete = $selectquery . $fromquery . $wherequery . $groupquery . $havingquery;
        $return->query = $selectquery.$fromquery.$wherequery.$groupquery.$havingquery.$orderquery.$limitquery;
        $return->queryresult = $this->CI->db->query($return->query)->result();
        $return->totalvalues = $this->CI->db->query($selectquery.$fromquery.$wherequery.$groupquery.$havingquery);
        $return->totalvalues = intval($return->totalvalues->num_rows());
        $return->pageno = $pageno;
        $return->lastpage = ceil($return->totalvalues / $maxlength);
        $return->elements = $elements;
        $return->from = $from;
        $return->where = $where;
        $return->group = $group;
        $return->having = $having;
        $return->search = $search;
        $return->startingfrom = $startingfrom;
        $return->maxlength = $maxlength;
        $return->options = $options;

        return $return;
    }
    public function createpagination()
    {
        echo '<div class="chintantablepagination"><ul class="pagination"></ul></div>';
    }
    public function createsearch($title = '', $description = '')
    {
        echo '<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
    <h2 class="blue-text">Please wait...</h2>
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col m6 l6">
            <h5 class="panel-title">'.$title.'</h5>
        </div>
        <div class="col m12 l6">
            <div class="row margintop15">
                <div class="col s8 m6"><input class="form-control chintantablesearch" type="text" placeholder="Search"></div>
                <div class="col s4 m3"><button class="btn blue darken-4 chintantablesearchgo waves-effect waves-light" type="button">Go!</button></div>
                <div class="col s12 m3">
                <select class="maxrow form-control">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                </div>
            </div>
        </div>
    </div>
</div>';
    }
    public function gethighstockjson($element1, $element2, $from, $where = '', $group = '', $having = '', $order = '', $limit = '', $otherselect = '')
    {
        if ($where == '') {
            $where = ' WHERE 1 ';
        }
        $query = "SELECT CONCAT(UNIX_TIMESTAMP($element1),'000') AS `0`, $element2 as `1` $otherselect  $from $where $group $having $order $limit";

        return $this->CI->db->query($query)->result_array();
    }
    public function todropdown($query)
    {
        foreach ($query as $row) {
            $return[$row->id] = $row->name;
        }

        return $return;
    }

    public function sendGcm($gcm, $token, $title, $message, $image = '', $icon = '', $link = '')
    {
        define('API_ACCESS_KEY', $gcm);
        $registrationIds = array($token);
        // prep the bundle
        $msg = array(
            'message' => $message,
            'title' => $title,
            'vibrate' => 1,
            'sound' => 1,

        );

        if ($image != '') {
            $msg['image'] = $image;
            $msg['style'] = 'picture';
            $msg['picture'] = $image;
        }
        if ($icon != '') {
            $msg['icon'] = $icon;
        }

        $fields = array(
            'registration_ids' => $registrationIds,
            'data' => $msg,
        );

        $headers = array(
            'Authorization: key='.API_ACCESS_KEY,
            'Content-Type: application/json',
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://android.googleapis.com/gcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);
    }

    public function sendApns($apnsPem, $apnsPassphase, $token, $message, $link)
    {

        // Put your device token here (without spaces):
        $deviceToken = $token;

        // Put your private key's passphrase here:
        $passphrase = $apnsPassphase;

        // Put your alert message here:
        $message = $message;

        ////////////////////////////////////////////////////////////////////////////////

        $ctx = stream_context_create();
        stream_context_set_option($ctx, 'ssl', 'local_cert', FCPATH.'config/'.$apnsPem);
        stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

        // Open a connection to the APNS server
        $fp = stream_socket_client(
            'ssl://gateway.sandbox.push.apple.com:2195', $err,
            $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);

        if (!$fp) {
            exit("Failed to connect: $err $errstr".PHP_EOL);
        }

        //echo 'Connected to APNS' . PHP_EOL;

        // Create the payload body
        $body['aps'] = array(
            'alert' => $message,
            'sound' => 'default',
            );

        // Encode the payload as JSON
        $payload = json_encode($body);

        // Build the binary notification
        $msg = chr(0).pack('n', 32).pack('H*', $deviceToken).pack('n', strlen($payload)).$payload;

        // Send it to the server
        $result = fwrite($fp, $msg, strlen($msg));

        // Close the connection to the server
        fclose($fp);
    }
}
/* End of file Someclass.php */
