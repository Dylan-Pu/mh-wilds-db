import fs from "fs";
import {parse} from "csv-parse";

// Lire le CSV brut
const csvData = fs.readFileSync("toto.csv", "utf8");

// node convert_mhw.js !!!!!!!!!!!!!!!!

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
        const item   = formatValue(row["item"]);
        const icon   = formatValue(row["icon"]);
        const target = formatValue(row["target"]);
        let break_ = formatValue(row["break"]);
        let carve  = formatValue(row["carve"]);
        let wound  = formatValue(row["wound"]);

        if (isNaN(break_))
            {break_="\""+break_+"\""  }

        if (isNaN(carve))
            {carve="\""+carve+"\""  }

        if (isNaN(wound))
            {wound="\""+wound+"\""  }


        let result =       
            "[ 'item' => '"+item+"', " +
            "'icon' => '"+icon+".png', " +
            "'target' => "+target+", " +
            "'break' =>  "+break_+", " + 
            "'carve' =>  "+carve+", " +
            "'wound' =>  "+wound+" ],";

        console.log(result);
    });
});
