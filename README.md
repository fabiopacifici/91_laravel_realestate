# Steps Migration/Seeder

Collego il db

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=your_port_number
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=root
```

Effettuo le migrazioni presenti di default nell'app

```bash
#esegue le migrazioni ma se il db non esiste vi chiede se volete crearlo (sando nome nel DB_DATABASE)
php artisan migrate
```

Creo modello per la mappatura della tabella del db

```bash

php artisan make:model NomeModello #solo modello
php artisan make:model NomeModello -ms #modello migrazione e seeder
```

-ms per generare migrazione e seeder collegati al modello

Creo nuova tabella con migrazione usando convenzione create_nome_tabella_table

```bash
php artisan make:migration create_NomeTabella_table

```

Aggiungere nuovo file di migrazione
rispettando le convenzioni (under_score_case) per aggiungere una colonna a una tabella esistente

```bash
php artisan make:migration add_nome_della_colonna_da_aggiungere_to_nome_tabella_table 
```

Ci crea un nuovo file di seeding per una tabella del db

```bash
php artisan make:seeder NomeSeeder
```

Popola la tabella del db

```bash
php artisan db:seed --class=SeederClassName
```
