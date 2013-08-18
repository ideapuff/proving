<?php
include 'includes/header.php';
?>
<section class="mainContent scollOffset">
    <div class="row">


        <?php include 'includes/sidebar.php'; ?>


        <div class="large-8 columns mainContainer">
            <section class="searchMain row">
                <div class="row">
                    <form>
                        <fieldset>
                            <legend style="font-size: 1.5em;
                                    background-color: transparent;
                                    color: white;">Search Criteria</legend>

                            <div class="row">

                                <div class="large-3 columns">
                                    <label>Region</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <option>North America</option>
                                        <option>Europe West</option>
                                        <option>Turkey</option>
                                        <option>Brazil</option>
                                        <option>Oceania</option>
                                        <option>Latin America South</option>
                                        <option>Latin America North</option>
                                        <option>Russia</option>
                                    </select>
                                </div>

                                <div class="large-3 columns">
                                    <label>League</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <option>Bronze</option>
                                        <option>Sliver</option>
                                        <option>Gold</option>
                                        <option>Platinum</option>
                                        <option>Diamond</option>
                                        <option>Challenger</option>
                                    </select>
                                </div>

                                <div class="large-3 columns">
                                    <label>Division</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <option>I</option>
                                        <option>II</option>
                                        <option>III</option>
                                        <option>IV</option>
                                        <option>V</option>
                                    </select>
                                </div>

                                <div class="large-3 columns">

                                </div>
                            </div>

                            <div class="row">

                                <div class="large-3 columns">
                                    <label>Min-Level:</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <?php
                                        for ($i = 1; $i <= 30; $i++) {
                                            echo "<option>" . $i . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="large-3 columns">
                                    <label>Max-Level:</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <?php
                                        for ($i = 1; $i <= 30; $i++) {
                                            echo "<option>" . $i . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="large-3 columns">
                                    <label>Prefer Position:</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <option>Top</option>
                                        <option>Jungle</option>
                                        <option>Mid</option>
                                        <option>Support</option>
                                        <option>ADC</option>
                                    </select>
                                </div>

                                <div class="large-3 columns">
                                    <label>Exclude Position:</label>
                                    <select id="customDropdown1" class="medium">
                                        <option>--Select--</option>
                                        <option>Top</option>
                                        <option>Jungle</option>
                                        <option>Mid</option>
                                        <option>Support</option>
                                        <option>ADC</option>
                                    </select>
                                </div>
                            </div>




                        </fieldset>
                    </form>

                </div>

            </section>
            <section class="searchMain row">
                <form>
                    <fieldset>
                        <legend style="font-size: 1.5em;
                                background-color: transparent;
                                color: white;">Search Result</legend>
                        <div class="row">
                            <div class="large-12 columns">
                                <img src="<?= BASE_URL ?>/public/images/search.png" alt="" style="width: 90%;"/>
                            </div>
                        </div>
                    </fieldset>

                </form>
            </section>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>