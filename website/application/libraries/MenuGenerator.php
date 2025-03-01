<?php

class MenuGenerator

{

	//Generate Parent Menu Using List

    public function generateMenu($PARAM)

	{

		$MENU_ARRAY=$PARAM['MENU'];

		$UL=$PARAM['UL'];

		$LI=$PARAM['LI'];

		$HAS_SUB_UL=$PARAM['HAS_SUB_UL'];

		$HAS_SUB_LI=$PARAM['HAS_SUB_LI'];

		$SUB_UL=$PARAM['SUB_UL'];

		$SUB_LI=$PARAM['SUB_LI'];

		$ANCHOR=$PARAM['ANCHOR'];

		$HAS_SUB_ANCHOR=$PARAM['HAS_SUB_ANCHOR'];

		$SUB_ANCHOR=$PARAM['SUB_ANCHOR'];

		


		

		echo '<ul '.$UL.'>';

			foreach($MENU_ARRAY as $MENU)

			{

				if(empty($MENU['children']))

				{
					$URL=(empty($MENU['href']) or $MENU['href']=="#")?"javascript:void(0);":front_base_url($MENU['href']);
					
					echo '<li '.$LI.'>';

						echo '<a href="'.$URL.'" target="'.$MENU['target'].'" title="'.$MENU['title'].'" '.$ANCHOR.'>';

							if(!empty($MENU['icon']))

								//echo '<i class="'.$MENU['icon'].'"></i>';

							echo $MENU['text'];

						echo '</a>';

					echo '</li>';

				}

				else

				{
					$URL=(empty($MENU['href']) or $MENU['href']=="#")?"javascript:void(0);":front_base_url($MENU['href']);

					echo '<li '.$HAS_SUB_LI.'>';

						echo '<a href="'.$URL.'" target="'.$MENU['target'].'" title="'.$MENU['title'].'" '.$HAS_SUB_ANCHOR.'>';

							if(!empty($MENU['icon']))

								//echo '<i class="'.$MENU['icon'].'"></i>';

							echo $MENU['text'];

						echo '</a>';

							$this->generateMenuRecurse($MENU['children'],$HAS_SUB_UL,$HAS_SUB_LI,$SUB_UL,$SUB_LI,$ANCHOR,$HAS_SUB_ANCHOR,$SUB_ANCHOR);

					echo '</li>';

				}

			}

		echo '</ul>';

	}

	

	//Generate Sub Menu in a recursive way Using List

	public function generateMenuRecurse($MENU_ARRAY,$HAS_SUB_UL='',$HAS_SUB_LI='',$SUB_UL='',$SUB_LI='',$ANCHOR='',$HAS_SUB_ANCHOR='',$SUB_ANCHOR='')

	{		
		echo '<ul '.$SUB_UL.'>';

			foreach($MENU_ARRAY as $MENU)

			{

				if(empty($MENU['children']))

				{
					$URL=(empty($MENU['href']) or $MENU['href']=="#")?"javascript:void(0);":front_base_url($MENU['href']);

					echo '<li '.$SUB_LI.'>';

						echo '<a href="'.$URL.'" target="'.$MENU['target'].'" title="'.$MENU['title'].'" '.$SUB_ANCHOR.'>';

							if(!empty($MENU['icon']))

								//echo '<i class="'.$MENU['icon'].'"></i>';

							echo $MENU['text'];

						echo '</a>';

					echo '</li>';

				}

				else

				{
					$URL=(empty($MENU['href']) or $MENU['href']=="#")?"javascript:void(0);":front_base_url($MENU['href']);

					echo '<li '.$HAS_SUB_LI.'>';

						echo '<a href="'.$URL.'" target="'.$MENU['target'].'" title="'.$MENU['title'].'" '.$HAS_SUB_ANCHOR.'>';

							if(!empty($MENU['icon']))

								//echo '<i class="'.$MENU['icon'].'"></i>';

							echo $MENU['text'];

						echo '</a>';

							$this->generateMenuRecurse($MENU['children'],$HAS_SUB_UL,$HAS_SUB_LI,$SUB_UL,$SUB_LI,$ANCHOR,$HAS_SUB_ANCHOR,$SUB_ANCHOR);

					echo '</li>';

				}

			}

		echo '</ul>';

	}

	

	

	

	

	

	

	

	

	

	

	//Generate Parent Menu Using Select & Option

    public function generateMenuSelect($PARAM)

	{

		$MENU_ARRAY=$PARAM['MENU'];

		$EXTRA=$PARAM['EXTRA'];

		

		//echo "<pre>";

		//print_r($value);

		

		echo '<select '.$EXTRA.'>';

			foreach($MENU_ARRAY as $MENU)

			{

				$URL=(empty($MENU['href']) or $MENU['href']=="#")?"javascript:void(0);":front_base_url($MENU['href']);
				
				if(empty($MENU['children']))

				{

					echo '<option value="'.$URL.'">';

							echo $MENU['text'];

					echo '</option>';

				}

				else

				{
					
					$URL=(empty($MENU['href']) or $MENU['href']=="#")?"javascript:void(0);":front_base_url($MENU['href']);

					$STEP="-";

					echo '<option value="'.$URL.'">';

							echo $MENU['text'];

					echo '</option>';

							$this->generateMenuRecurse($MENU['children'],$STEP);

				}

			}

		echo '</select>';

	}

	

	//Generate Sub Menu in a recursive way Select & Option

	public function generateMenuSelectRecurse($MENU_ARRAY,$STEP)

	{		

			foreach($MENU_ARRAY as $MENU)

			{

				if(empty($MENU['children']))

				{

					echo '<option value="'.$URL.'">';

							echo $MENU['text'];

					echo '</option>';

				}

				else

				{

					$STEP.="-";

					echo '<option value="'.$URL.'">';

							echo $MENU['text'];

					echo '</option>';

							$this->generateMenuRecurse($MENU['children'],$STEP);

				}

			}

	}

}

