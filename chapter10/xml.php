<?php
if (isset($_POST['xml'])) {
        $xml_data = $_POST['xml'];
        $xml_object = simplexml_load_string($xml_data, 'SimpleXMLElement', LIBXML_DTDLOAD | LIBXML_NOENT);
}
?>
<form method="post">
        <textarea name="xml" style="width: 500; height: 300;"></textarea>
        <br/><br/>
        <input type="submit" name="submit_xml" value="Parse XML"/>
</form>

<?php 
if (isset($xml_object)) {
        ?>
        <span style="color: red">
        <?php
                echo htmlentities(print_r($xml_object, true));
        ?></span>
        <?php
}
?>
