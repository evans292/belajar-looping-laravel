<style type="text/css">
    .t1{
        display:table;
        width:90%;
        border-collapse:collapse;
        margin:0 auto;
        line-height:25px;
    }
    .r1{
        display:table-row;

    }
    .c1{
        display:table-cell;
        width: 30%;
        font-weight: 800;
        font-size: 20px;
        float: left;
        background: #49b9ef;
        padding: 10px;
        text-align: center;
        border-left: 2px solid #c7d7de;
        box-shadow: 5px 7px 11px 0px;
        color: #FFEB3B;
        border-bottom:2px solid #c7d7de; 
    }

    .c2{
        display:table-cell;
        width: 30%;
        font-weight: 800;
        font-size: 20px;
        float: left;
        background: #88cfd8;
        padding: 10px;
        border-left: 2px solid #c7d7de;
        box-shadow: 5px 7px 11px 0px;
        color: #077b71;
        border-bottom:2px solid #c7d7de; 
        margin: auto auto;
    }

</style>

<div class="content">
    <h1>{{ $judul }} </h1>
    <br>

    <div class="t1">
        <div class="r1">
            {{-- <div class="c1">Looping 1</div>
            <div class="c1">Looping 2</div>
            <div class="c1">Tugas 1 (2 For)</div>
            <div class="c1">Tugas 2 (1 For 1 If)</div> --}}
        </div>
        <div class="r1">
            {{-- <div class="c2">

                @for($i=1; $i<=$var; $i++)
                    {{ $i }}
                    <br>
                @endfor  

            </div>
            <div class="c2">
               <!-- panjang -->
               @for($k=1;$k<=$var;$k++)

               <!-- lebar -->
                    @for($j=1; $j<=$k; $j++)
                        *
                    @endfor
                   <br> 
               @endfor                             
            </div> --}}
            <div class="c2">
              <!-- panjang -->
              @for($k=1;$k<=$var;$k++)

              <!-- lebar -->
                   @for($j=$var; $j>=$k; $j--)
                       *
                   @endfor
                  <br> 
              @endfor  
            </div>
            <div class="c2">
                @for($i=1; $i<=$var; $i++)
                @if ($i % 2 == 0)
                 {{ $i }}
                @endif
                <br>
                @endfor   
            </div>
            <div class="c2">
                <!-- panjang -->
                @for($k=1;$k<=$var;$k++)
                <!-- lebar -->
                     @for($j=$var; $j>=$k; $j--)
                         <span style="visibility: hidden">a</span>
                     @endfor
                     @for ($l=$var; $l>=1; $l--)
                     *
                     @endfor
                    <br> 
                @endfor  
            </div>
            <div class="c2">
                <!-- panjang -->
                @for($k=$var;$k >= 1;$k--)
                <!-- lebar -->
                     @for($j=$var; $j>=$k; $j--)
                         <span style="visibility: hidden">a</span>
                     @endfor
                     @for ($l=1; $l < ($k * 2); $l++)
                     *
                     @endfor
                    <br> 
                @endfor  
            </div>
            <div class="c2"> 
                @for($k=1;$k <= $var;$k++)
                <!-- lebar -->
                     @for($j=$var; $j>=$k; $j--)
                         <span style="visibility: hidden">a</span>
                     @endfor
                     @for ($l=1; $l < ($k * 2); $l++)
                        *
                     @endfor
                    <br> 
                @endfor
                <!-- panjang -->
                @for($k=$var;$k >= 1;$k--)
                <!-- lebar -->
                     @for($j=$var; $j>=$k; $j--)
                         <span style="visibility: hidden">a</span>
                     @endfor
                     @for ($l=1; $l < ($k * 2); $l++)
                     *
                     @endfor
                    <br> 
                @endfor  
            </div>
            <div class="c2">
                @for($i=1;$i<=$var;$i++)
                    @for($k=($var / 2); $k>$i; $k--)
                    <span style="visibility: hidden">a</span>
                    @endfor
                       @for($j=1;$j<=$l;$j++)
                       @if($i == ($var - 2))
                        @for($z = 1; $z <= $var; $z++)
                            *
                        @endfor
                       @endif
                       @if($i == ($var - 1))
                       @for($z = 1; $z <= $var; $z++)
                           *
                       @endfor
                      @endif
                      *
                        @endfor
                        
                        <br>
                @endfor
                
                
                @for($i=($n-1);$i>=1;$i--)
                    @for($k=$i;$k<=($n-1);$k++)
                    <span style="visibility: hidden">a</span>
                    @endfor
                    @for($j=1;$j<=$l;$j++)
                        *
                    @endfor
                    
                    <br>
                @endfor
            </div>
        </div>                    
    </div>
</div>