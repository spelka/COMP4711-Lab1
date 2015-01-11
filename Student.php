<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of a student
 * 
 * @author Sebastian
 */
class Student
{
    /**
     * Constructor for the student class.
     */
    function _construct()
    {
        $this->surname ='';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Adds an email to an array of emails associated with the student.
     * @param type $which an unsigned integer
     * @param type $address a string containing the email address
     */
    function add_email ( $which, $address )
    {
        $this->emails[$which] = $address;
    }
    
    /**
     * Adds a grade to the Student
     * @param type $grade the grade that the student received
     */
    function add_grade ( $grade )
    {
        $this->grades[] = $grade;
    }
    
    /**
     * determines the average grade of the student
     * @return type double
     */
    function average ()
    {
        $total = 0;
        foreach ($this->grades as $value)
        {
            $total += $value;
        }
        return $total / count ($this->grades);
    }
    
    /**
     * returns a string containing the information associated with a student
     * @return type string
     */
    function toString()
    {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
        {   
            $result .= $which . ":\t". $what. "\n";
        }
        return '<pre>'.$result.'</pre>';
    }
}

