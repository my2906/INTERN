  <?php 
        $n=124;
        $m=114; 
        
    function tong($n,$m)
    {
        $n1= str_split($n);
        $m1=str_split($m);
        //var_dump($m1);
        $remember=0;  
        $kq="";
       $length = strlen($n);
        if(strlen($n)==strlen($m))
        {
            for($i=strlen($n)-1;$i>=0;$i--)
            {
                $temp=$n1[$i]+$m1[$i];
                if($temp==9 && $remember==1)
                {
                    $kq=$kq."0";
                    $remember=1;
                }
                else{
                    if($temp<10)
                    {
                        if($remember==1)
                        {
                            $kq=$kq.($temp+1);
                        }
                        else{
                            $kq=$kq.($temp);
                            $remember=0;
                        }
                    }else{
                        if($remember ==1)
                        {
                            $kq=$kq.($temp -10 +1);
                            $remember=1;
                        }
                        else{
                            $kq=$kq.($temp-10);
                            $remember=1;
                        }

                    }
                }
            var_dump(strrev($kq));
            }
        }
    }
    tong($n,$m);
 ?>
