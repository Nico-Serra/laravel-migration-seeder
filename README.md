## table

# Trains

Azienda: string(20)->nullable()
Stazione di partenza: string(30)
Stazione di arrivo: string(30)
Orario di partenza: string(10)
Orario di arrivo: string(10)
Codice Treno: string(10)->unique()
Numero Carrozze: tinyint()->nullable()
In orario: boolean()-nullable()
Cancellato: boolean()-nullable()