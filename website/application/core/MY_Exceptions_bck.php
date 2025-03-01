<?
class MY_Exceptions extends CI_Exceptions
{
    public function __construct()
    {
        parent::__construct();
		
		
    }

    public function show_404($page = '', $log_error = TRUE)
    {
        $url404 = basename($_SERVER['REQUEST_URI']);
		
		$CI =& get_instance();
        
		//Load Fetch Model
		$CI->load->model( 'FetchModel' );
		//Run SelectDB Function which select data from database (Page Details)
		$FIELD = '*';
		$CON = 'IsDel="0" and redirection_old_url="'.urlencode($url404).'"';
		$ORDER = array();
		$CI->common_data[ 'REDIRECTION' ] = $CI->FetchModel->SelectDB( $FIELD, 'tb_redirection', $CON, $ORDER );
		
		if(!empty($CI->common_data[ 'REDIRECTION' ][0]))
		{
			$URL=urldecode($CI->common_data[ 'REDIRECTION' ][0]['redirection_new_url']);
			return redirect(front_base_url($URL));
		}
		else
			echo "Page not found!";
    }
}