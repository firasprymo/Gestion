<?php
$c=$_GET['class'];

               include"db.php"; ?>

<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
               <tr>
                <td>Jour</td> 
                <td>08.10 - 09.40</td> 
                <td>09.50 - 11.20</td>
                <td>11.30 - 13.00</td>
                <td>14.20 - 15.50</td>
                <td>16.00 - 17.30</td>
            </tr>
        </thead>
        <tbody>  
            <tr>
                <th>Lundi</th>
                <th> 
                    <?php 
                
                $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='lundi' and dat_debut='08.10 - 09.40'");


                while($r=mysqli_fetch_assoc($res)){
                    ?>
                    <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                    <?php } mysqli_free_result ($res);
                    ?>
                    </th>
                     <th> 
                        <?php 
                  
                   
                    $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='lundi' and dat_debut='09.50 - 11.20'");


                    while($r=mysqli_fetch_assoc($res)){
                        ?>
                        <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                        <?php } mysqli_free_result ($res);
                        ?>
                        </th>
                        <th> 
                            <?php 
                      

                        
                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='lundi' and dat_debut='11.30 - 13.00'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                            <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?>
                        </th>
                        <th>
                        <?php 



                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='lundi' and dat_debut='14.20 - 15.50'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                        
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?> 
                            </th>
                            <th>
                            <?php 
                            $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='lundi' and dat_debut='16.00 - 17.30'");

                            while($r=mysqli_fetch_assoc($res)){
                                ?>
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                                <?php } mysqli_free_result ($res);
                                ?>
</th>
                            </tr>
                              <tr>
                <th>mardi</th>
                <th> 
                    <?php 
                
                $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mardi' and dat_debut='08.10 - 09.40'");


                while($r=mysqli_fetch_assoc($res)){
                    ?>
                    <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                    <?php } mysqli_free_result ($res);
                    ?>
                    </th>
                     <th> 
                        <?php 
                  
                   
                    $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mardi' and dat_debut='09.50 - 11.20'");


                    while($r=mysqli_fetch_assoc($res)){
                        ?>
                        <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                        <?php } mysqli_free_result ($res);
                        ?>
                        </th>
                        <th> 
                            <?php 
                      

                        
                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mardi' and dat_debut='11.30 - 13.00'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                            <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?>
                        </th>
                        <th>
                        <?php 



                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mardi' and dat_debut='14.20 - 15.50'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                        
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?> 
                            </th>
                            <th>
                            <?php 
                            $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mardi' and dat_debut='16.00 - 17.30'");

                            while($r=mysqli_fetch_assoc($res)){
                                ?>
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                                <?php } mysqli_free_result ($res);
                                ?>
</th>
                            </tr> 
                             <tr>
                <th>Mercredi</th>
                <th> 
                    <?php 
                
                $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mercredi' and dat_debut='08.10 - 09.40'");


                while($r=mysqli_fetch_assoc($res)){
                    ?>
                    <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                    <?php } mysqli_free_result ($res);
                    ?>
                    </th>
                     <th> 
                        <?php 
                  
                   
                    $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mercredi' and dat_debut='09.50 - 11.20'");


                    while($r=mysqli_fetch_assoc($res)){
                        ?>
                        <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                        <?php } mysqli_free_result ($res);
                        ?>
                        </th>
                        <th> 
                            <?php 
                      

                        
                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mercredi' and dat_debut='11.30 - 13.00'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                            <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?>
                        </th>
                        <th>
                        <?php 



                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mercredi' and dat_debut='14.20 - 15.50'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                        
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?> 
                            </th>
                            <th>
                            <?php 
                            $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='mercredi' and dat_debut='16.00 - 17.30'");

                            while($r=mysqli_fetch_assoc($res)){
                                ?>
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                                <?php } mysqli_free_result ($res);
                                ?>
</th>
                            </tr>
                             <tr>
                <th>Jeudi</th>
                <th> 
                    <?php 
                
                $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='jeudi' and dat_debut='08.10 - 09.40'");


                while($r=mysqli_fetch_assoc($res)){
                    ?>
                    <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                    <?php } mysqli_free_result ($res);
                    ?>
                    </th>
                     <th> 
                        <?php 
                  
                   
                    $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='jeudi' and dat_debut='09.50 - 11.20'");


                    while($r=mysqli_fetch_assoc($res)){
                        ?>
                        <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                        <?php } mysqli_free_result ($res);
                        ?>
                        </th>
                        <th> 
                            <?php 
                      

                        
                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='jeudi' and dat_debut='11.30 - 13.00'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                            <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?>
                        </th>
                        <th>
                        <?php 



                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='jeudi' and dat_debut='14.20 - 15.50'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                        
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?> 
                            </th>
                            <th>
                            <?php 
                            $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='jeudi' and dat_debut='16.00 - 17.30'");

                            while($r=mysqli_fetch_assoc($res)){
                                ?>
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                                <?php } mysqli_free_result ($res);
                                ?>
</th>
                            </tr> 
                            <tr>
                <th>Vendredi</th>
                <th> 
                    <?php 
                
                $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='vendredi' and dat_debut='08.10 - 09.40'");


                while($r=mysqli_fetch_assoc($res)){
                    ?>
                    <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                    <?php } mysqli_free_result ($res);
                    ?>
                    </th>
                     <th> 
                        <?php 
                  
                   
                    $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='vendredi' and dat_debut='09.50 - 11.20'");


                    while($r=mysqli_fetch_assoc($res)){
                        ?>
                        <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                        <?php } mysqli_free_result ($res);
                        ?>
                        </th>
                        <th> 
                            <?php 
                      

                        
                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='vendredi' and dat_debut='11.30 - 13.00'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                            <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?>
                        </th>
                        <th>
                        <?php 



                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='vendredi' and dat_debut='14.20 - 15.50'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                        
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?> 
                            </th>
                            <th>
                            <?php 
                            $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='vendredi' and dat_debut='16.00 - 17.30'");

                            while($r=mysqli_fetch_assoc($res)){
                                ?>
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                                <?php } mysqli_free_result ($res);
                                ?>
</th>
                            </tr>  <tr>
                <th>Samedi</th>
                <th> 
                    <?php 
                
                $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='samedi' and dat_debut='08.10 - 09.40'");


                while($r=mysqli_fetch_assoc($res)){
                    ?>
                    <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                    <?php } mysqli_free_result ($res);
                    ?>
                    </th>
                     <th> 
                        <?php 
                  
                   
                    $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='samedi' and dat_debut='09.50 - 11.20'");


                    while($r=mysqli_fetch_assoc($res)){
                        ?>
                        <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                        <?php } mysqli_free_result ($res);
                        ?>
                        </th>
                        <th> 
                            <?php 
                      

                        
                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='samedi' and dat_debut='11.30 - 13.00'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                            <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?>
                        </th>
                        <th>
                        <?php 



                        $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='samedi' and dat_debut='14.20 - 15.50'");


                        while($r=mysqli_fetch_assoc($res)){
                            ?>
                        
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                            <?php } mysqli_free_result ($res);
                            ?> 
                            </th>
                            <th>
                            <?php 
                            $res=mysqli_query($con,"select * from seance where nom_dep='$c' and jour='samedi' and dat_debut='16.00 - 17.30'");

                            while($r=mysqli_fetch_assoc($res)){
                                ?>
                                <?php echo '<h4>'.$r['nom_matiere'].'</h4>'.$r['nom_enseignant']; ?>
                                <?php } mysqli_free_result ($res);
                                ?>
</th>
                            </tr> 

                        </tbody>
                    </table>
                </div>
            </div>


