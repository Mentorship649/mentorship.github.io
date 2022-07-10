if($batch==null && $search==null)
							{
								$sel = "select * from studentreg where branch='$branch' and mentor='0' ORDER BY `enrollment` ASC";							
							}elseif($search==null)
							{
								$sel = "select * from studentreg where batch='$batch' and  branch='$branch' and mentor='0' ORDER BY `enrollment` ASC";
							
							}
							elseif($batch==null)
							{
								$sel = "select * from studentreg where enrollment='$search' and  branch='$branch' and mentor='0' ORDER BY `enrollment` ASC";
							}	