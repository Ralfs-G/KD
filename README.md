# SimpleShop
Šis ir PHP mini projekts programmu testēšanas pārbaudes darbam.
Projektā **nav gatavu Unit testu**. Skolēniem tie jāizveido pašiem.
Projektā ir arī **apzināti ielaistas kļūdas**, lai skolēniem būtu ko atrast, aprakstīt un labot.

## Projekta mērķis
Jāprot:
1. pārbaudīt datus ar `var_dump()`, `dump()` un `dd()`;
2. izveidot Unit testus;
3. veikt QA testēšanu pārlūkprogrammā;
4. atrast kļūdas;
5. aprakstīt kļūdas;
6. izlabot kļūdas;
7. atkārtoti pārbaudīt programmu.

## Projekta struktūra

SimpleShop/
├── public/
│   ├── index.php
│   └── assets/css/style.css
├── src/
│   ├── Cart.php
│   ├── Discount.php
│   └── Validator.php
├── tests/
├── composer.json
├── README.md
└── QA_testesanas_tabula.docx

## Palaišana

Instalē Composer pakotnes:

```bash
composer install
```

Palaid projektu:

```bash
composer start
```

Vai manuāli:

```bash
php -S localhost:8080 -t public
```

Atver pārlūkā:

```text
http://localhost:8080
```

---

## Unit testu palaišana

Kad skolēns pats ir izveidojis testus mapē `tests/`, tos var palaist ar komandu:

```bash
composer test
```

## Skolēniem pašiem jāizveido Unit testi
Jāizveido testi klasēm:

- `Cart`
- `Discount`
- `Validator`

Ieteicamie testi:
1. pārbaudīt, vai preci var pievienot grozam;
2. pārbaudīt, vai kopējā cena tiek aprēķināta pareizi;
3. pārbaudīt, vai cenu `0` nevar pievienot;
4. pārbaudīt, vai daudzumu `0` nevar pievienot;
5. pārbaudīt, vai negatīvu daudzumu nevar pievienot;
6. pārbaudīt, vai 20% atlaide no `100.00` dod `80.00`;
7. pārbaudīt derīgu e-pastu;
8. pārbaudīt nederīgu e-pastu;
9. pārbaudīt tukšu vērtību;
10. pārbaudīt vērtību, kurā ir tikai atstarpes.

## QA testēšana
Šajā daļā jāaizpilda testēšanas tabula: QA_testesanas_tabula.docx

## QA testēšanas uzdevums
Atver projektu pārlūkprogrammā un pārbaudi, vai sistēma darbojas pareizi no lietotāja skatpunkta.
Testēšanai izmanto dotos scenārijus no QA_testesanas_tabula.docx

## Secinājums darba beigās
Darba beigās jāuzraksta īss secinājums.

Atbildi uz jautājumiem:
1. Ko es pārbaudīju ar Unit testiem?
2. Kādas kļūdas atradu QA testēšanas laikā?
3. Kāda ir atšķirība starp Unit testēšanu un QA testēšanu?
4. Kā `dd()`, `dump()` un `var_dump()` palīdz programmas pārbaudē?

## Darba iesniegšana

Jāiesniedz:

1. izveidotie Unit testi;
2. aizpildīta `QA_testesanas_tabula.docx`;
3. īss secinājums;
4. izlabots projekts vai norāde, kuras kļūdas tika atrastas un labotas.
5. Iesniekt iesūtot mykoob.lv git clone linku. 

---

## Atkārtojamās tēmas

- `var_dump()`
- `dump()`
- `dd()`
- Unit testēšana
- QA testēšana

---

## Svarīgi

Šajā projektā ir kļūdas. Tās jāatrod pašam, izmantojot:

- Unit testus;
- QA testēšanas tabulu;
- `var_dump()`;
- `dump()`;
- `dd()`.
