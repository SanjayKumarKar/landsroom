<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Active template
|--------------------------------------------------------------------------
|
| The $template['active_template'] setting lets you choose which template 
| group to make active.  By default there is only one group (the 
| "default" group).
|
*/
$template['active_template'] = 'default';

/*
|--------------------------------------------------------------------------
| Explaination of template group variables
|--------------------------------------------------------------------------
|
| ['template'] The filename of your master template file in the Views folder.
|   Typically this file will contain a full XHTML skeleton that outputs your
|   full template or region per region. Include the file extension if other
|   than ".php"
| ['regions'] Places within the template where your content may land. 
|   You may also include default markup, wrappers and attributes here 
|   (though not recommended). Region keys must be translatable into variables 
|   (no spaces or dashes, etc)
| ['parser'] The parser class/library to use for the parse_view() method
|   NOTE: See http://codeigniter.com/forums/viewthread/60050/P0/ for a good
|   Smarty Parser that works perfectly with Template
| ['parse_template'] FALSE (default) to treat master template as a View. TRUE
|   to user parser (see above) on the master template
|
| Region information can be extended by setting the following variables:
| ['content'] Must be an array! Use to set default region content
| ['name'] A string to identify the region beyond what it is defined by its key.
| ['wrapper'] An HTML element to wrap the region contents in. (We 
|   recommend doing this in your template file.)
| ['attributes'] Multidimensional array defining HTML attributes of the 
|   wrapper. (We recommend doing this in your template file.)
*/





// Default template
$template['default']['template'] = 'default_template';
$template['default']['regions'] = array(
   'header',
   'content',
   'footer'
);
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = TRUE;



// Main template
$template['main']['template'] = 'main_template';
$template['main']['regions'] = array(
   'meta',
   'header_asset',
   'header',
   'content',
   'footer',
   'footer_asset',
   'extra_element'
);
$template['main']['parser'] = 'parser';
$template['main']['parser_method'] = 'parse';
$template['main']['parse_template'] = TRUE;



// Single template
$template['single']['template'] = 'single_template';
$template['single']['regions'] = array(
   'content'
);
$template['single']['parser'] = 'parser';
$template['single']['parser_method'] = 'parse';
$template['single']['parse_template'] = TRUE;




















/* End of file template.php */
/* Location: ./application_config/template.php */