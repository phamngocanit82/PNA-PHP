<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Session extends CI_Session
{

    function MY_Validation ()
    {
        parent::CI_Session();
    }

    // --------------------------------------------------------------------
    


    /**
     * Serialize an array
     * 
     * This is a copy of the original from 1.7.0
     * This is a bug fix for handling objects in a session
     * REF: http://codeigniter.com/forums/viewthread/95690/
     *
     * This function first converts any slashes found in the array to a temporary
     * marker, so when it gets unserialized the slashes will be preserved
     *
     * @access  private
     * @param   array
     * @return  string
     */
    function _serialize ($data)
    {
        if (is_array($data))
        {
            foreach ($data as $key => $val)
            {
                if (! is_object($val))
                    $data[$key] = str_replace('\\', '{{slash}}', $val);
            }
        } else
        {
            $data = str_replace('\\', '{{slash}}', $data);
        }
        
        return serialize($data);
    }

    // --------------------------------------------------------------------
    


    /**
     * Unserialize
     *
     * This function unserializes a data string, then converts any
     * temporary slash markers back to actual slashes
     *
     * @access    private
     * @param    array
     * @return    string
     */
    function _unserialize ($data)
    {
        $data = @unserialize(strip_slashes($data));
        
        if (is_array($data))
        {
            foreach ($data as $key => $val)
            {
                if (! is_object($val))
                    $data[$key] = str_replace('{{slash}}', '\\', $val);
            }
            
            return $data;
        }
        
        return str_replace('{{slash}}', '\\', $data);
    }
}