<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        
        if( strlen($s)%2 !==0)
            return false ;
        $stack = [] ; 
        $open_parentheses = ['(','{','[',];
        $close_parentheses = [')','}',']',];
        for($i=0; $i< strlen($s); $i++){
            if( in_array($s[$i], $open_parentheses)){
               $stack[] =  $s[$i];
            }elseif($s[$i] == ')' && $stack[count($stack)-1] == '('
                    || $s[$i] == '}' && $stack[count($stack)-1] == '{'
                    || $s[$i] == ']' && $stack[count($stack)-1] == '['){
                array_pop($stack);
                
            }elseif(in_array($s[$i], $close_parentheses)){
                return false;
                
            }
        }
        return empty($stack);
        
    }
}

/**
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
 

Example 1:

Input: s = "()"
Output: true
Example 2:

Input: s = "()[]{}"
Output: true
Example 3:

Input: s = "(]"
Output: false
 

Constraints:

1 <= s.length <= 104
s consists of parentheses only '()[]{}'.
