<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $uploads['Upload']['id'];
echo '<img src="'.$this->Html->url(array('controller' => 'uploads','action' => 'download',$id)).'"/>'; 