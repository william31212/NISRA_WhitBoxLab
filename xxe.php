<?php

// xxe.xml 內容
/* <?xml version="1.0" encoding="utf-8"?>
  <!DOCTYPE test [
    <!ENTITY xxe SYSTEM "file:///etc/passwd">
  ]>
<note xmlns="http://www.w3schools.com" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
  <to>&xxe;</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>Don't forget me this weekend!</body>
</note> */


$reader = new XMLReader();
$reader->open("xxe.xml");
$reader->setParserProperty(XMLReader::SUBST_ENTITIES, true); // Noncompliant (SUBST_ENTITIES enable external entities substitution)