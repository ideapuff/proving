<?php

include 'includes/header.php';
?>
<?php

echo 'registration';
?>
<section class="mainContent scollOffset">
    <div class="row">
        <div class="large-12 columns mainContainer">
            <section class="registrationMain row">
                <form action="<?= BASE_URL?>/dashboard" method="POST">
                    <div class="registrationStep2">
                        <fieldset>
                            <legend>Basic Information</legend>

                            <div class="row">

                                <div class="large-3 columns">
                                    <label>Country</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <option>Country</option>
                                        <option>Country</option>
                                        <option>Country</option>
                                    </select>
                                </div>

                                <div class="large-3 columns">
                                    <label>State</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <option>State</option>
                                        <option>State</option>
                                        <option>State</option>
                                    </select>
                                </div>
                                <div class="large-6 columns">

                                </div>
                            </div>

                            <div class="row">
                                <div class="large-12 columns">
                                    <label>Voice Communication (only shown to other team member)</label>
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="large-3 columns">
                                    <label for="checkbox1"><input type="checkbox" id="checkbox1" style=""> Skype</label>
                                </div>

                                <div class="large-3 columns">
                                    <label for="checkbox2"><input type="checkbox" id="checkbox2"  style=""> Vent</label>
                                </div>

                                <div class="large-3 columns">
                                    <label for="checkbox3"><input type="checkbox" id="checkbox3" style=""> TS3</label>
                                </div>

                                <div class="large-3 columns">
                                    <label for="checkbox3"><input type="checkbox" id="checkbox3" style=""> RaidCall</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="large-12 columns">
                                    <label>Introduce yourself</label>
                                    <textarea placeholder="Introduce yourself"></textarea>
                                </div>                              
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Add Character</legend>

                            <div class="row">

                                <div class="large-6 columns">
                                    <label>Character Name</label>
                                    <input type="text" placeholder="Character Name">
                                </div>


                                <div class="large-3 columns">
                                    <label>Choose Region</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <option>North America</option>
                                        <option>Europe West</option>
                                        <option>Europe West</option>
                                        <option>Korea</option>
                                        <option>Brazil</option>
                                        <option>Turkey</option>
                                    </select>
                                </div>

                                <div class="large-3 columns">

                                </div>

                            </div>

                            <div class="row">
                                <div class="large-6 columns">
                                    <label>Automatically display your most played champions?</label>
                                </div>    
                                <div class="large-2 columns">
                                    <label for="radio1"><input name="radio1" type="radio" id="radio1" > Yes</label>
                                </div>    
                                <div class="large-2 columns">
                                    <label for="radio2"><input name="radio1" type="radio" id="radio2" > No</label>
                                </div> 
                                <div class="large-2 columns">
                                </div> 
                            </div>

                            <div class="row">
                                <div class="large-6 columns">
                                    <label>Automatically display your recently played ranked K/D/A stats?</label>
                                </div>    
                                <div class="large-2 columns">
                                    <label for="radio3"><input name="radio2" type="radio" id="radio3" > Yes</label>
                                </div>    
                                <div class="large-2 columns">
                                    <label for="radio4"><input name="radio2" type="radio" id="radio4" > No</label>
                                </div> 
                                <div class="large-2 columns">
                                </div> 
                            </div>

                            <div class="row">
                                <div class="large-12 columns">
                                    <label>What do you like to play? </label>
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="large-2 columns">
                                    <label for="Top"><input type="checkbox" id="Top" style=""> Top</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="Jungle"><input type="checkbox" id="Jungle"  style=""> Jungle</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="Mid"><input type="checkbox" id="Mid" style=""> Mid</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="AD"><input type="checkbox" id="AD" style=""> AD</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="Support"><input type="checkbox" id="Support" style=""> Support</label>
                                </div>

                                <div class="large-2 columns">

                                </div>
                            </div>

                            <div class="row">
                                <div class="large-12 columns">
                                    <label>Which game mode do you usually play? </label>
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="large-2 columns">
                                    <label for="UnrankedDuo"><input type="checkbox" id="UnrankedDuo" style=""> Unranked Duo</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="Unranked3s"><input type="checkbox" id="Unranked3s"  style=""> Unranked 3s</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="Unranked5s"><input type="checkbox" id="Unranked5s" style=""> Unranked 5s</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="RankedDuo"><input type="checkbox" id="RankedDuo" style=""> Ranked Duo</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="Ranked3s"><input type="checkbox" id="Ranked3s" style=""> Ranked 3s</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="Ranked5s"><input type="checkbox" id="Ranked5s" style=""> Ranked 5s</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="large-2 columns">
                                    <label for="Dominion"><input type="checkbox" id="Dominion" style=""> Dominion</label>
                                </div>

                                <div class="large-2 columns">
                                    <label for="ARAM"><input type="checkbox" id="ARAM"  style=""> ARAM</label>
                                </div>

                                <div class="large-2 columns">

                                </div>

                                <div class="large-2 columns">

                                </div>

                                <div class="large-2 columns">

                                </div>

                                <div class="large-2 columns">

                                </div>
                            </div>


                            <div class="row">
                                <div class="large-12 columns">
                                    <label>what are you looking to do</label>
                                    <textarea placeholder="ex: I am looking for a 5s rank team."></textarea>
                                </div>                              
                            </div>
                        </fieldset>
                    </div><!-- step 2 form-->

                    <div class="actionBtn">
                        <div class="row">
                            <div class="large-6 columns">
                                <input type="submit" class="btnWhite" value="Submit">
                            </div>
                            
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div>
</section>
<?php

include 'includes/footer.php';
?>
