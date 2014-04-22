<div class="filter">                
    <form action="" method="post" class="searchandfilter">
        <div>
            <ul>
                <li>
                <h4>Industry</h4>
                    <ul> 
                        <li class="cat-item cat-item-20"><label><input type='checkbox' name='ofsectors[]' value='20' /> Finance</label>
                            <ul class='children'>
                                <li class="cat-item cat-item-21"><label><input type='checkbox' name='ofsectors[]' value='21' /> Commodities</label></li>
                                <li class="cat-item cat-item-22"><label><input type='checkbox' name='ofsectors[]' value='22' /> Funds &amp; Investment</label></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-19"><label><input type='checkbox' name='ofsectors[]' value='19' /> Mining</label></li>
                        <li class="cat-item cat-item-5"><label><input type='checkbox' name='ofsectors[]' value='5' /> Oil &amp; Gas</label>
                            <ul class='children'>
                                <li class="cat-item cat-item-7"><label><input type='checkbox' name='ofsectors[]' value='7' /> Drilling</label></li>
                                <li class="cat-item cat-item-11"><label><input type='checkbox' name='ofsectors[]' value='11' /> Subsea Engineering</label>
                                    <!--<ul class='children'>
                                        <li class="cat-item cat-item-12"><label><input type='checkbox' name='ofsectors[]' value='12' /> Pipeline</label></li>
                                        <li class="cat-item cat-item-13"><label><input type='checkbox' name='ofsectors[]' value='13' /> Structural</label></li>
                                    </ul>-->
                                </li>
                                <li class="cat-item cat-item-8"><label><input type='checkbox' name='ofsectors[]' value='8' /> Subsea Technical</label>
                                    <!--<ul class='children'>
                                        <li class="cat-item cat-item-9"><label><input type='checkbox' name='ofsectors[]' value='9' /> ROV</label></li>
                                        <li class="cat-item cat-item-10"><label><input type='checkbox' name='ofsectors[]' value='10' /> Survey &amp; Inspection</label></li>
                                    </ul>-->
                                </li>
                                <li class="cat-item cat-item-6"><label><input type='checkbox' name='ofsectors[]' value='6' /> Well Services</label></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-14"><label><input type='checkbox' name='ofsectors[]' value='14' /> Renewable Energy</label>
                            <ul class='children'>
                                <li class="cat-item cat-item-17"><label><input type='checkbox' name='ofsectors[]' value='17' /> Solar</label></li>
                                <li class="cat-item cat-item-18"><label><input type='checkbox' name='ofsectors[]' value='18' /> Waste</label></li>
                                <li class="cat-item cat-item-16"><label><input type='checkbox' name='ofsectors[]' value='16' /> Wave &amp; Tidal</label></li>
                                <li class="cat-item cat-item-15"><label><input type='checkbox' name='ofsectors[]' value='15' /> Wind</label></li>
                            </ul>
                        </li>
                    </ul>
                    <input type="hidden" name="ofsectors_operator" value="and" />
                </li>
                <li>
                <h4>Job Type</h4> 
                    <ul>   
                        <li class="cat-item cat-item-4"><label><input type='checkbox' name='ofrole[]' value='4' /> Contract</label></li>
                        <li class="cat-item cat-item-3"><label><input type='checkbox' name='ofrole[]' value='3' /> Permanent</label></li>
                        <li class="cat-item cat-item-2"><label><input type='checkbox' name='ofrole[]' value='2' /> Temporary</label></li>
                    </ul>
                    <input type="hidden" name="ofrole_operator" value="and" />
                </li>
                <li>
                <h4>Location</h4>
                    <ul>
                        <li class="cat-item cat-item-23"><label><input type='checkbox' name='ofrole[]' value='23' />All</label></li>
                        <li class="cat-item cat-item-24"><label><input type='checkbox' name='ofrole[]' value='24' />Africa</label></li>
                        <li class="cat-item cat-item-25"><label><input type='checkbox' name='ofrole[]' value='25' />Americas</label></li>
                        <li class="cat-item cat-item-26"><label><input type='checkbox' name='ofrole[]' value='26' />Asia</label></li>
                        <li class="cat-item cat-item-27"><label><input type='checkbox' name='ofrole[]' value='27' />Australia</label></li>
                        <li class="cat-item cat-item-28"><label><input type='checkbox' name='ofrole[]' value='28' />Europe</label></li>
                        <li class="cat-item cat-item-29"><label><input type='checkbox' name='ofrole[]' value='29' />Middle East</label></li>
                        <li class="cat-item cat-item-30"><label><input type='checkbox' name='ofrole[]' value='30' />Russia</label></li>
                    </ul>
                </li>
                <li>
                <h4> Date</h4>
                <input class="postform" type="date" name="ofpost_date[]" value="" />
                </li>
                <!--<li><input class="postform" type="date" name="ofpost_date[]" value="" /></li>-->
                <li><input type="hidden" name="ofsubmitted" value="1">
                    <input type="submit" value="Submit">
                </li>
            </ul>
        </div>
    </form>           
</div>