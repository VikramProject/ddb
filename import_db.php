<?php
/**
 * Created by PhpStorm.
 * User: nishanthuchil
 * Date: 19/04/17
 * Time: 2:24 PM
 */

include("config.php");
include("nav_bar.php");
?>

<div id="wrap">
    <div class="container">
        <div class="row">
            <div class="span3 hidden-phone"></div>
            <div class="span6" id="form-login">
                <form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Import CSV</legend>
                        <div class="control-group">
                            <div class="control-label">
                                <label>CSV:</label>
                            </div>
                            <div class="controls">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="span3 hidden-phone"></div>
        </div>
    </div>
</div>
