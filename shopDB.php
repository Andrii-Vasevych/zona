<?php
    //phpinfo();
    
    error_reporting(E_ALL);
    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);
    
    echo "Testing database PDO connection...<br>";
    
    $SECRET = "diu7ajksf8sj,vKLDHliewudksfj"; //  place this in WebApp settings
    
    
    $connenv = getenv("SQLAZURECONNSTR_defaultConnection");
    parse_str(str_replace(";", "&", $connenv), $connarray);
    
    $connstring = "sqlsrv:Server=".$connarray["Data_Source"].";Database=".$connarray["Initial_Catalog"];
    $user = $connarray["User_Id"];
    $pass = $connarray["Password"];
    
    function printCollations($conn)
    {
        $sql = "SELECT name, description FROM sys.fn_helpcollations()";
        foreach ($conn->query($sql) as $row)
        {
            print $row['name'] . "\t";
            print $row['description'] . "<br>";
        }
    }

    try
    {
        $conn = new PDO( $connstring, $user, $pass );
        
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        
        
        $sqlcreate ="CREATE TABLE items( ID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,".
                 "title         VARCHAR( 250 ) NOT NULL,".
                 "description   VARCHAR( 500 ) NOT NULL,".
                 "price         INT);";
        
        try { $conn->exec($sqlcreate); } catch ( PDOException $e ) { echo "Create table error. May be it exists."; }
        
        print("The table was created.<br><br>");
        
        $sqlinsert = "insert into items (title,description,price) values (?, ?, ?)";
        $insertquery = $conn->prepare($sqlinsert);
      
        // test set of users
        $myusers = array(
            array("laptop Lenovo IdeaPad 100-14", "Intel Celeron N2840 / RAM 2 Gb / HDD 500 Gb / Intel HD Graphics / LAN / Wi-Fi / DOS / 1.9 kg", 5999),
            array("laptop HP 255 G4", "AMD Dual-Core E1-6015 / RAM 2 Gb / HDD 500 Gb / AMD Radeon R2 / LAN / Wi-Fi / Bluetooth / Linux / 2.15 kg", 6099),
            array("laptop Dell Inspiron 3542", "Intel Celeron 2957U / RAM 2 Gb / HDD 500 Gb / Intel HD Graphics / DVD Super Multi / LAN / Wi-Fi / Bluetooth 4.0 / Linux / 2.4 kg", 6777) );

        
        foreach($myusers as $user)
        {
            $title = $user[0];
            $description = $user[1];
            $price = $user[2];
            $insertquery->execute(array($title, $description, $price));
            
            echo "Insert error code = ".$insertquery->errorCode()." "; // Five zeros are good like this 00000 but HY001 is a common error
            echo "Number of rows inserted = ".$insertquery->rowCount()."<br>";
        }
        
        print "<br>Selecting rows from the table...<br>";
        
        $sqlselect = "SELECT * FROM items";
        foreach ($conn->query($sqlselect) as $row)
        {
            print   htmlspecialchars($row['title']).", ".
                    htmlspecialchars($row['description']).", ".
                    "price = ".htmlspecialchars($row['price'])."<br>";
        }
        
        print "<br>Dropping the table...<br>";
        
        $sqldrop ="DROP TABLE items";
        
        $conn->exec($sqldrop);
        
        print "The table was dropped <br>";
    }
    catch ( PDOException $e )
    {
        // TODO: There is a security problem here. Do not do this in production!!!
        print( "PDO Error : " );
        die(print_r($e));
    }

?>