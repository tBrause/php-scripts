<?php
################# connection to the database ###

define('DBHOST', 'localhost');
define('DBUSER', '');
define('DBPASS', '');
define('DBNAME', '');
define('DBSYTEM', 'mysql');
define('DBPORT', '3306');
define('DBDSN', DBSYTEM . ':dbname=' . DBNAME . ';host:' . DBHOST . ';port=' . DBPORT);

# Datenbank Klasse
$pdo = new PDO(DBDSN, DBUSER, DBPASS);

# count
$statement = $pdo->query($sql);
$count = $statement->columnCount();

# class
class Filmuebersicht
{

    private ?PDO $pdo;

    private static bool $instanz = false;

    public function __construct(string $dns, string $dbuser, string $dbpass)
    {

        if (self::$instanz == false) {
            $this->pdo = new PDO(DBDSN, DBUSER, DBPASS);
            self::$instanz = true;
        } else {
            throw new Exception(static::class . ' - Instanz existiert schon');
        }
    }

    /**
     * DB schließen
     */
    public function __destruct()
    {
        $this->pdo = null;
        self::$instanz = false;
        #echo 'das ist das ende';
    }

    public function getFilmuebersicht($area, $page, $sort): string
    {

        $filmuebersicht = '';

        ############ SQL Genre
        $sql = "SELECT * 
        FROM `genre` 
        ORDER BY Name";
        $statement = $this->pdo->query($sql);

        $statement->execute();
        $count = $statement->rowCount();

        foreach ($statement as $row) {
            $filmuebersicht = $filmuebersicht . '<div' . (($sort == $row['id']) ? " class=\"select\"" : "") . '>
                <a href="' . $_SERVER['SCRIPT_NAME'] . '?area=' . $area . '&page=0' . '&sort=' . $row['id'] . '">' . $row['Name'] . '</a>
            </div>';
        }
        $statement = null;

        # RETURN
        echo $filmuebersicht;
        return $filmuebersicht;
    }
}

# aufruf class
$programm = new Filmuebersicht(DBDSN, DBUSER, DBPASS);
