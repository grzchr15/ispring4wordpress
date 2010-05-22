<?php
/*
Plugin Name: ispring4wordpress
Plugin URI: http://www.bretterhofer.at/ispring4wordpress
Description: To enable iSping swf files to be displayed
Version: 0.4
Author: Christian Bretterhofer
Author URI: http://www.bretterhofer.at
*/
/*  Copyright 2010  Christian Bretterhofer  (email : christian.bretterhofer@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function ispring_func($atts, $content=null, $code="") {
   // $atts    ::= array of attributes
   // $content ::= text within enclosing form of shortcode element
   // $code    ::= the shortcode found, when == callback name
   // examples: [ispring]
   //           [ispring/]
   //           [ispring foo='bar']
   //           [ispring foo='bar'/]
   //           [ispring]content[/ispring]
   //           [ispring foo='bar']content[/ispring]
   extract(shortcode_atts(array(
 		'id' => 'presentation',
 		'width' => '720',
		'height' => '576',
		'allowScriptAccess' => 'sameDomain',
		'quality' => 'high',
		'bgcolor' => '#ffffff',
		'allowFullScreen' => 'true',
		'width' => '720',
		'src' => '/blog/wp-content/uploads/somefile.swf',
		'autostart'=>'1',
		'mp3' => '8',
	), $atts));
	//$retstr= "url = {$url} bar = {$bar} autostart = {$autostart}";
	$retstr="";
	$retstr=$retstr."<object id=\"{$id}\" ";
	$retstr=$retstr."classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" ";
	$retstr=$retstr."width=\"{$width}\" ";
	$retstr=$retstr."height=\"{$height}\" ";
	$retstr=$retstr."codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0\">";
	$retstr=$retstr."<param name=\"allowScriptAccess\" value=\"{$allowScriptAccess}\" />";
	$retstr=$retstr."<param name=\"quality\" value=\"{$quality}\" />";
	$retstr=$retstr."<param name=\"bgcolor\" value=\"{$bgcolor}\" />";
	$retstr=$retstr."<param name=\"allowFullScreen\" value=\"{$allowFullScreen}\" />";
	$retstr=$retstr."<param name=\"src\" value=\"{$src}\" />";
	$retstr=$retstr."<embed id=\"{$id}\" type=\"application/x-shockwave-flash\" ";
	$retstr=$retstr."width=\"{$width}\" ";
	$retstr=$retstr."height=\"{$height}\" ";
	$retstr=$retstr."src=\"{$src}\" ";
	$retstr=$retstr."allowfullscreen=\"{$allowfullscreen}\" ";
	$retstr=$retstr."bgcolor=\"{$bgcolor}\" ";
	$retstr=$retstr."quality=\"{$quality}\" ";
	$retstr=$retstr."allowscriptaccess=\"{$allowscriptaccess}\">";
	$retstr=$retstr."</embed></object>";
	$retstr=$retstr."\n";
	//$retstr=$retstr."[media id={$mp3} width=\"{$width}\" height=\"{21}\" ]";
	return $retstr;
}

add_shortcode('ispring', 'ispring_func');


?>