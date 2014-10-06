<?php
class LanguageLoader
{
    function initialize() {
        $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $lang = 'english';
        switch ($language){
            case "pt":
                $lang = 'portuguese';
                break;
            case "en":
                $lang = 'english';
                break;
            default:
                $lang = 'english'; //include EN in all other cases of different lang detection
                break;
        }

        $ci =& get_instance();
        $ci->load->helper('language');
        $ci->lang->load('admin', $lang);
        $ci->lang->load('site', $lang);
    }
}
