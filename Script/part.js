import fs from "fs";
import {parse} from "csv-parse";

// Lire le CSV brut
const csvData = fs.readFileSync("part.csv", "utf8");

// Fonction qui convertit les valeurs
function formatValue(v) {
    if (v === undefined || v === null || v.trim() === "") return null;
    return v; // Texte → quotes simples
}

parse(csvData, {
    columns: true,     // Utilise la première ligne comme noms de colonnes
    trim: true,
    delimiter:",",
    from_line:2
}, (err, rows) => {
    if (err) throw err;

    rows.forEach(row => {
        let part   = formatValue(row["part"]);
        let cut   = formatValue(row["cut"]);
        let blunt = formatValue(row["blunt"]);
        let ammo = formatValue(row["ammo"]);
        let fire  = formatValue(row["fire"]);
        let water  = formatValue(row["water"]);
        let thunder  = formatValue(row["thunder"]);
        let ice  = formatValue(row["ice"]);
        let dragon  = formatValue(row["dragon"]);

        
        let result =     
        
            "[\n'name' => '"+part+"',\n"+
            "'physical' => ['cut' => "+cut+", "+
            "'blunt' => "+blunt+", "+
            "'ammo' => "+ammo+"],\n"+
            "'elemental' => ['fire' => "+fire+", "+
            "'water' => "+water+", "+
            "'thunder' => "+thunder+", "+
            "'ice' => "+ice+", "+
            "'dragon' => "+dragon+"],\n],"


        console.log(result);
    });
});
