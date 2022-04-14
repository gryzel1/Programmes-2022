function selectInternational() {
    var div = document.getElementsByClassName("international-columns");

    var categories = document.getElementsByClassName("categorie-int");
    var separator = document.getElementsByClassName("separateur-int");
    
    if (categories.item(i).classList.contains("categorie-international-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-international-selected");
            categories.item(i).classList.add("categorie-international");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-international");
            categories.item(i).classList.add("categorie-international-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectSecurite() {
    var div = document.getElementsByClassName("securite-columns");

    var categories = document.getElementsByClassName("categorie-sec");
    var separator = document.getElementsByClassName("separateur-sec");
    if (categories.item(i).classList.contains("categorie-securite-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-securite-selected");
            categories.item(i).classList.add("categorie-securite");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-securite");
            categories.item(i).classList.add("categorie-securite-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectCulture() {
    var div = document.getElementsByClassName("culture-columns");

    var categories = document.getElementsByClassName("categorie-cult");
    var separator = document.getElementsByClassName("separateur-cult");
    if (categories.item(i).classList.contains("categorie-culture-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-culture-selected");
            categories.item(i).classList.add("categorie-culture");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-culture");
            categories.item(i).classList.add("categorie-culture-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectJustice() {
    var div = document.getElementsByClassName("justice-columns");

    var categories = document.getElementsByClassName("categorie-jus");
    var separator = document.getElementsByClassName("separateur-jus");
    if (categories.item(i).classList.contains("categorie-justice-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-justice-selected");
            categories.item(i).classList.add("categorie-justice");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-justice");
            categories.item(i).classList.add("categorie-justice-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectEconomie() {
    var div = document.getElementsByClassName("economie-columns");

    var categories = document.getElementsByClassName("categorie-econ");
    var separator = document.getElementsByClassName("separateur-econ");
    if (categories.item(i).classList.contains("categorie-economie-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-economie-selected");
            categories.item(i).classList.add("categorie-economie");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-economie");
            categories.item(i).classList.add("categorie-economie-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectSolidarite() {
    var div = document.getElementsByClassName("solidarite-columns");

    var categories = document.getElementsByClassName("categorie-sol");
    var separator = document.getElementsByClassName("separateur-sol");
    if (categories.item(i).classList.contains("categorie-solidarite-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-solidarite-selected");
            categories.item(i).classList.add("categorie-solidarite");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-solidarite");
            categories.item(i).classList.add("categorie-solidarite-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectEcologie() {
    var div = document.getElementsByClassName("ecologie-columns");

    var categories = document.getElementsByClassName("categorie-ecol");
    var separator = document.getElementsByClassName("separateur-ecol");
    if (categories.item(i).classList.contains("categorie-ecologie-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-ecologie-selected");
            categories.item(i).classList.add("categorie-ecologie");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-ecologie");
            categories.item(i).classList.add("categorie-ecologie-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectEducation() {
    var div = document.getElementsByClassName("education-columns");

    var categories = document.getElementsByClassName("categorie-edu");
    var separator = document.getElementsByClassName("separateur-edu");
    if (categories.item(i).classList.contains("categorie-education-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-education-selected");
            categories.item(i).classList.add("categorie-education");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-education");
            categories.item(i).classList.add("categorie-education-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectLogement() {
    var div = document.getElementsByClassName("logement-columns");

    var categories = document.getElementsByClassName("categorie-log");
    var separator = document.getElementsByClassName("separateur-log");
    if (categories.item(i).classList.contains("categorie-logement-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-logement-selected");
            categories.item(i).classList.add("categorie-logement");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-logement");
            categories.item(i).classList.add("categorie-logement-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectAdministration() {
    var div = document.getElementsByClassName("administration-columns");

    var categories = document.getElementsByClassName("categorie-adm");
    var separator = document.getElementsByClassName("separateur-adm");
    if (categories.item(i).classList.contains("categorie-administration-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-administration-selected");
            categories.item(i).classList.add("categorie-administration");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-administration");
            categories.item(i).classList.add("categorie-administration-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectAdministration() {
    var div = document.getElementsByClassName("administration-columns");

    var categories = document.getElementsByClassName("categorie-adm");
    var separator = document.getElementsByClassName("separateur-adm");
    if (categories.item(i).classList.contains("categorie-administration-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-administration-selected");
            categories.item(i).classList.add("categorie-administration");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-administration");
            categories.item(i).classList.add("categorie-administration-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectSante() {
    var div = document.getElementsByClassName("sante-columns");

    var categories = document.getElementsByClassName("categorie-san");
    var separator = document.getElementsByClassName("separateur-san");
    if (categories.item(i).classList.contains("categorie-sante-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-sante-selected");
            categories.item(i).classList.add("categorie-sante");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-sante");
            categories.item(i).classList.add("categorie-sante-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}

function selectEnergie() {
    var div = document.getElementsByClassName("energie-columns");

    var categories = document.getElementsByClassName("categorie-ene");
    var separator = document.getElementsByClassName("separateur-ene");
    if (categories.item(i).classList.contains("categorie-energie-selected")) {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.add("hidden");
            categories.item(i).classList.remove("categorie-energie-selected");
            categories.item(i).classList.add("categorie-energie");
            separator.item(i).classList.remove("separateur-selected");
        }
    } else {
        for (var i = 0; i < categories.length; i++) {
            div.item(i).classList.remove("hidden");
            categories.item(i).classList.remove("categorie-energie");
            categories.item(i).classList.add("categorie-energie-selected");
            separator.item(i).classList.add("separateur-selected");
        }
    }
    
}