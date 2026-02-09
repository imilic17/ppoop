<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - Praktična provjera znanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .hero {
            background: linear-gradient(135deg, #e65100 0%, #ff8f00 50%, #ffd54f 100%);
            color: white;
            padding: 40px 0;
            margin-bottom: 30px;
        }
        .hero h1 { text-shadow: 1px 1px 3px rgba(0,0,0,0.3); }
        .task-card {
            border-left: 4px solid;
            margin-bottom: 20px;
        }
        .task-1 { border-left-color: #28a745; }
        .task-2 { border-left-color: #ffc107; }
        .task-3 { border-left-color: #dc3545; }
        .task-bonus { border-left-color: #6f42c1; }
        .code-example {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 5px;
            font-family: 'Consolas', monospace;
            font-size: 14px;
            overflow-x: auto;
        }
        .code-example .comment { color: #6c7086; }
        .points {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #333;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
        }
        .git-cmd {
            background: #1a1a2e;
            color: #00d4ff;
            padding: 10px 15px;
            border-radius: 5px;
            font-family: 'Consolas', monospace;
            font-size: 13px;
            margin-bottom: 8px;
        }
        @media print {
            .hero { padding: 20px 0; background: #e65100 !important; }
            .code-example { font-size: 11px; }
            .no-print { display: none !important; }
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1><i class="bi bi-car-front"></i> OOP PHP - Praktična provjera znanja</h1>
                    <p class="lead mb-0" style="color: #fff3e0;">Sustav za autoškolu</p>
                </div>
                <div class="col-md-4 text-end">
                    <p class="mb-0"><strong>Trajanje:</strong> 2 školska sata</p>
                    <p class="mb-0"><strong>Bodovi:</strong> max 100</p>
                    <p class="mb-0"><strong>Prolaz:</strong> 45 bodova</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <!-- GIT UPUTE -->
        <div class="card mb-4 border-dark">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0"><i class="bi bi-git"></i> Korak 0: Priprema projekta (prije početka rada!)</h5>
            </div>
            <div class="card-body">
                <p><strong>1.</strong> Kloniraj repozitorij s GitHuba (ako već nisi):</p>
                <div class="git-cmd">git clone https://github.com/imilic17/ppoop.git</div>

                <p class="mt-3"><strong>2.</strong> Uđi u mapu projekta:</p>
                <div class="git-cmd">cd ppoop</div>

                <p class="mt-3"><strong>3.</strong> Kreiraj <strong>svoj branch</strong> (ime i prezime, bez razmaka):</p>
                <div class="git-cmd">git checkout -b Ime_Prezime</div>
                <p class="text-muted"><small>Primjer: <code>git checkout -b Marko_Maric</code></small></p>

                <p class="mt-3"><strong>4.</strong> Koristi strukturu projekta u mapi autoskola:</p>
                <div class="git-cmd"> otvori mapu autoskola u VSC</div>

                <p class="mt-3"><strong>5.</strong> Kad završiš, spremi i pushaj svoj rad:</p>
                <div class="git-cmd">git add .<br>git commit -m "Provjera znanja - Ime Prezime"<br>git push origin Ime_Prezime</div>
            </div>
        </div>

        <!-- UVOD -->
        <div class="alert alert-info mb-4">
            <h5><i class="bi bi-info-circle"></i> Scenarij</h5>
            <p class="mb-0">
                Autoškola "Start" želi digitalizirati svoje poslovanje. Tvoj zadatak je napraviti OOP sustav
                za upravljanje vozilima, kamionima i polaznicima autoškole. Svaki instruktor vozi
                određeno vozilo, a polaznik bira svog instruktora. Koristi znanje s nastave
                o klasama, konstruktorima, modifikatorima pristupa i nasljeđivanju.
            </p>
        </div>

        <!-- UPUTE -->
        <div class="alert alert-warning mb-4">
            <h5><i class="bi bi-lightbulb"></i> Upute za rad</h5>
            <ul class="mb-0">
                <li>Svaku klasu napiši u <strong>zasebnu datoteku</strong> (naziv datoteke = naziv klase + .php)</li>
                <li>Na kraju napiši <strong>test.php</strong> u kojem uključuješ sve klase i pokazuješ da tvoj kod radi</li>
                <li>Sav rad spremi u mapu s tvojim <strong>Ime_Prezime</strong></li>
                <li>Testiraj kod prije predaje - pokreni test.php u pregledniku i provjeri da nema grešaka</li>
            </ul>
        </div>

        <!-- ZADATAK 1 -->
        <div class="card task-card task-1 position-relative">
            <span class="points bg-success">20 bodova</span>
            <div class="card-header bg-success text-white">
                <h4 class="mb-0"><i class="bi bi-1-circle"></i> Zadatak 1: Klasa Vozilo</h4>
            </div>
            <div class="card-body">
                <p>Kreiraj datoteku <code>Vozilo.php</code> s klasom <strong>Vozilo</strong>.</p>

                <h6>Zahtjevi:</h6>
                <ul>
                    <li>Public svojstva: <code>marka</code>, <code>model</code>, <code>godiste</code></li>
                    <li>Private svojstvo: <code>cijenaPoSatu</code> (u eurima, mora biti veća od 0)</li>
                    <li>Konstruktor koji prima <code>marka</code>, <code>model</code>, <code>godiste</code> i <code>cijenaPoSatu</code>
                        <ul><li>U konstruktoru: ako je cijenaPoSatu &lt;= 0, postavi ju na 30 (defaultna cijena)</li></ul>
                    </li>
                    <li>Metoda <code>setCijenaPoSatu($cijena)</code> - postavlja cijenu samo ako je > 0</li>
                    <li>Metoda <code>getCijenaPoSatu()</code> - vraća cijenu po satu</li>
                    <li>Metoda <code>getInfo()</code> - vraća string: <em>"[marka] [model] ([godiste]) | [cijenaPoSatu] €/sat"</em></li>
                    <li>Metoda <code>jeNovo()</code> - vraća <code>true</code> ako je godište >= 2024, inače <code>false</code></li>
                </ul>

                <h6>Očekivani rezultat:</h6>
                <div class="code-example">
$vozilo = new Vozilo("Volkswagen", "Golf 8", 2023, 35);
echo $vozilo->getInfo();       <span class="comment">// Volkswagen Golf 8 (2023) | 35 €/sat</span>
echo $vozilo->getCijenaPoSatu(); <span class="comment">// 35</span>
echo $vozilo->jeNovo();        <span class="comment">// false (2023 < 2024)</span>

$vozilo->setCijenaPoSatu(-10); <span class="comment">// Ne smije promijeniti (negativna)</span>
echo $vozilo->getCijenaPoSatu(); <span class="comment">// 35 (ostalo isto)</span>

$novo = new Vozilo("Toyota", "Yaris", 2025, 40);
echo $novo->jeNovo();          <span class="comment">// true (2025 >= 2024)</span>

$greska = new Vozilo("Opel", "Corsa", 2020, -5);
echo $greska->getCijenaPoSatu(); <span class="comment">// 30 (postavljeno na default)</span>
                </div>
            </div>
        </div>

        <!-- ZADATAK 2 -->
        <div class="card task-card task-2 position-relative">
            <span class="points bg-warning text-dark">30 bodova</span>
            <div class="card-header bg-warning">
                <h4 class="mb-0"><i class="bi bi-2-circle"></i> Zadatak 2: Nasljeđivanje - Kamion</h4>
            </div>
            <div class="card-body">
                <p>Kreiraj datoteku <code>Kamion.php</code> s klasom <strong>Kamion</strong> koja nasljeđuje <strong>Vozilo</strong>.</p>
                <p class="text-muted">
                    Kamion je vozilo koje ima nosivost (u tonama) i broj osovina. Polaganje za kamion
                    zahtijeva 40 obaveznih sati vožnje plus doplatu koja ovisi o nosivosti.
                </p>

                <h6>Zahtjevi:</h6>
                <ul>
                    <li>Klasa <code>Kamion</code> extends <code>Vozilo</code></li>
                    <li>Dodatna private svojstva: <code>nosivost</code> (u tonama), <code>brojOsovina</code></li>
                    <li>Konstruktor koji prima sve parametre (koristi <code>parent::__construct()</code>)</li>
                    <li>Override metodu <code>getInfo()</code> da vraća:<br>
                        <em>"[marka] [model] ([godiste]) | [cijenaPoSatu] €/sat | [nosivost]t, [brojOsovina] osovina"</em>
                    </li>
                    <li>Nova metoda <code>troskoviPolaganja()</code> - vraća ukupni trošak polaganja:<br>
                        <strong>(cijenaPoSatu × 40) + (nosivost × 100)</strong><br>
                        <small class="text-muted">40 obaveznih sati × cijena + nosivost × 100 € doplate za teška vozila</small>
                    </li>
                </ul>

                <h6>Očekivani rezultat:</h6>
                <div class="code-example">
$kamion = new Kamion("MAN", "TGX", 2022, 50, 18, 3);
echo $kamion->getInfo();
<span class="comment">// MAN TGX (2022) | 50 €/sat | 18t, 3 osovina</span>

echo $kamion->troskoviPolaganja();
<span class="comment">// 3800  (50 * 40 + 18 * 100 = 2000 + 1800)</span>

echo $kamion->jeNovo(); <span class="comment">// false (naslijeđena metoda, 2022 < 2024)</span>
                </div>

                <h6 class="mt-3">Dijagram:</h6>
                <pre class="bg-light p-3">
       ┌──────────────────────┐
       │       Vozilo          │
       │──────────────────────│
       │ + marka               │
       │ + model               │
       │ + godiste             │
       │ - cijenaPoSatu        │
       └──────────┬───────────┘
                  │ extends
       ┌──────────┴───────────┐
       │       Kamion          │
       │──────────────────────│
       │ - nosivost            │
       │ - brojOsovina         │
       └──────────────────────┘
                </pre>
            </div>
        </div>

        <!-- ZADATAK 3 -->
        <div class="card task-card task-3 position-relative">
            <span class="points bg-danger">30 bodova</span>
            <div class="card-header bg-danger text-white">
                <h4 class="mb-0"><i class="bi bi-3-circle"></i> Zadatak 3: Klasa Polaznik</h4>
            </div>
            <div class="card-body">
                <p>Kreiraj datoteku <code>Polaznik.php</code> s klasom <strong>Polaznik</strong>.</p>
                <p class="text-muted">
                    Polaznik autoškole ima listu instruktora s kojima može vježbati. Svaki instruktor
                    vozi jedno određeno vozilo. Polaznik dodaje instruktore na svoju listu i može
                    pregledati tko mu je sve dostupan za vožnju.
                </p>

                <h6>Zahtjevi:</h6>
                <ul>
                    <li>Private svojstva: <code>ime</code>, <code>email</code>, <code>instruktori</code> (array)</li>
                    <li>Konstruktor koji prima <code>ime</code> i <code>email</code>, a <code>instruktori</code> inicijalizira kao prazan array</li>
                    <li>Getter metode: <code>getIme()</code>, <code>getEmail()</code></li>
                    <li>Metoda <code>dodajInstruktora($imeInstruktora, $vozilo)</code> - dodaje instruktora i njegovo vozilo u listu
                        <ul><li>Ako instruktor s istim imenom već postoji, ne dodaje ga (sprječava duplikate)</li></ul>
                    </li>
                    <li>Metoda <code>ukloniInstruktora($imeInstruktora)</code> - uklanja instruktora po imenu</li>
                    <li>Metoda <code>prikaziInstruktore()</code> - vraća array stringova u formatu <em>"[imeInstruktora] - [marka] [model]"</em></li>
                    <li>Metoda <code>brojInstruktora()</code> - vraća broj instruktora u listi</li>
                    <li>Metoda <code>najskupljiSat()</code> - vraća <strong>najveću cijenu po satu</strong> od svih instruktorovih vozila (ako je lista prazna, vraća 0)</li>
                </ul>

                <h6>Očekivani rezultat:</h6>
                <div class="code-example">
$polaznik = new Polaznik("Marko Marić", "marko@email.com");

$v1 = new Vozilo("Volkswagen", "Golf 8", 2023, 35);
$v2 = new Vozilo("Toyota", "Yaris", 2025, 40);
$kamion = new Kamion("MAN", "TGX", 2022, 50, 18, 3);

$polaznik->dodajInstruktora("Ivan Ivić", $v1);
$polaznik->dodajInstruktora("Ana Anić", $v2);
$polaznik->dodajInstruktora("Pero Perić", $kamion);

echo $polaznik->brojInstruktora();          <span class="comment">// 3</span>
print_r($polaznik->prikaziInstruktore());
<span class="comment">// ["Ivan Ivić - Volkswagen Golf 8", "Ana Anić - Toyota Yaris", "Pero Perić - MAN TGX"]</span>

echo $polaznik->najskupljiSat();            <span class="comment">// 50 (MAN TGX ima 50 €/sat)</span>

$polaznik->ukloniInstruktora("Ana Anić");
echo $polaznik->brojInstruktora();          <span class="comment">// 2</span>
echo $polaznik->najskupljiSat();            <span class="comment">// 50</span>
                </div>
            </div>
        </div>

        <!-- BONUS -->
        <div class="card task-card task-bonus position-relative">
            <span class="points" style="background: #6f42c1;">+20 bodova</span>
            <div class="card-header text-white" style="background: #6f42c1;">
                <h4 class="mb-0"><i class="bi bi-star"></i> BONUS: Autoškola sustav</h4>
            </div>
            <div class="card-body">
                <p>Kreiraj datoteku <code>Autoskola.php</code> koja spaja sve zajedno.</p>

                <h6>Zahtjevi:</h6>
                <ul>
                    <li>Private svojstva: <code>naziv</code>, <code>vozniPark</code> (array vozila), <code>polaznici</code> (array)</li>
                    <li>Konstruktor koji prima <code>naziv</code></li>
                    <li>Metoda <code>getNaziv()</code> - vraća naziv autoškole</li>
                    <li>Metoda <code>dodajVozilo($vozilo)</code> - dodaje vozilo u vozni park</li>
                    <li>Metoda <code>registrirajPolaznika($polaznik)</code> - dodaje polaznika</li>
                    <li>Metoda <code>pretraziPoMarki($marka)</code> - vraća array vozila određene marke</li>
                    <li>Metoda <code>najjeftinijiSat($n)</code> - vraća N najjeftinijih vozila po cijeni sata (od najjeftinijeg)</li>
                    <li>Metoda <code>statistika()</code> - vraća array s:
                        <ul>
                            <li><code>ukupno_vozila</code> - broj običnih vozila (ne kamiona)</li>
                            <li><code>ukupno_kamiona</code> - broj kamiona</li>
                            <li><code>ukupno_polaznika</code> - broj polaznika</li>
                            <li><code>prosjecna_cijena_sata</code> - prosječna cijena po satu svih vozila</li>
                        </ul>
                    </li>
                </ul>

                <h6>Hintovi:</h6>
                <div class="code-example">
<span class="comment">// Sortiranje po cijeni (uzlazno):</span>
usort($array, function($a, $b) {
    return $a->getCijenaPoSatu() - $b->getCijenaPoSatu();
});

<span class="comment">// Provjera tipa objekta:</span>
if ($vozilo instanceof Kamion) {
    echo "Ovo je kamion!";
}
                </div>
            </div>
        </div>

        <!-- TESTNA DATOTEKA -->
        <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0"><i class="bi bi-file-code"></i> Testna datoteka (test.php)</h5>
            </div>
            <div class="card-body">
                <p>Kreiraj datoteku <code>test.php</code> koja uključuje sve klase i demonstrira njihov rad:</p>
                <div class="code-example">
&lt;?php
require_once 'Vozilo.php';
require_once 'Kamion.php';
require_once 'Polaznik.php';
<span class="comment">// require_once 'Autoskola.php';  // Ako radiš bonus</span>

<span class="comment">// Kreiraj barem 3 vozila i 2 kamiona</span>
<span class="comment">// Kreiraj barem 2 polaznika s instruktorima</span>
<span class="comment">// Demonstriraj sve metode</span>

<span class="comment">// Primjer:</span>
$v1 = new Vozilo("Volkswagen", "Golf 8", 2023, 35);
echo $v1->getInfo();
<span class="comment">// ... ostatak testiranja</span>
?&gt;
                </div>
            </div>
        </div>

        <!-- STRUKTURA PREDAJE -->
        <div class="card mb-4">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0"><i class="bi bi-folder"></i> Struktura mape za predaju</h5>
            </div>
            <div class="card-body">
                <pre class="bg-light p-3 mb-0">
Ime_Prezime/
├── Vozilo.php
├── Kamion.php
├── Polaznik.php
├── Autoskola.php      (ako radiš bonus)
└── test.php
                </pre>
            </div>
        </div>

        <!-- BODOVANJE -->
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0"><i class="bi bi-clipboard-check"></i> Kriteriji bodovanja</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Kriterij</th>
                            <th>Bodovi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ispravno korištenje <code>class</code> i <code>__construct()</code></td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Ispravno korištenje <code>public</code>/<code>private</code></td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Ispravno nasljeđivanje (<code>extends</code>, <code>parent::</code>)</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Validacija podataka i logika metoda</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Kod radi bez grešaka</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Test datoteka demonstrira sve funkcionalnosti</td>
                            <td>5</td>
                        </tr>
                        <tr class="table-warning">
                            <td><strong>BONUS: Autoškola klasa</strong></td>
                            <td><strong>+20</strong></td>
                        </tr>
                    </tbody>
                    <tfoot class="table-secondary">
                        <tr>
                            <th>UKUPNO (bez bonusa)</th>
                            <th>80</th>
                        </tr>
                        <tr>
                            <th>MAKSIMALNO (s bonusom)</th>
                            <th>100</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- UPOZORENJA -->
        <div class="alert alert-danger">
            <h5><i class="bi bi-exclamation-triangle"></i> Važno!</h5>
            <ul class="mb-0">
                <li>Ovo je <strong>samostalan rad</strong> - prepisivanje = 0 bodova za obje strane</li>
                <li>Kod mora raditi - testiraj prije predaje!</li>
                <li>Koristi znanje s nastave - ne kopiraj s interneta</li>
                <li>Ne zaboravi <strong>pushati na GitHub</strong> kad završiš!</li>
                <li>Pitaj profesora ako nešto nije jasno u zadatku!</li>
            </ul>
        </div>

        <div class="text-center mb-4 no-print">
            <a href="../index.php" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Natrag na vježbe
            </a>
            <button onclick="window.print()" class="btn btn-primary">
                <i class="bi bi-printer"></i> Ispiši zadatak
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
