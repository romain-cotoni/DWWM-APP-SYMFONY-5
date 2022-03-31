var lien_chercher     = $('#lien_chercher')    ; 
var lien_session      = $('#lien_session')     ;
var lien_entreprise   = $('#lien_entreprise')  ;
var lien_responsable  = $('#lien_responsable') ;
var lien_jury         = $('#lien_jury')        ;

var lien_candidat     = $('#lien_candidat')    ;
var lien_competence   = $('#lien_competence')  ;
var lien_projet       = $('#lien_projet')      ;

var lien_titre        = $('#lien_titre')       ;
var lien_ccp          = $('#lien_ccp')         ;
var lien_habilitation = $('#lien_habilitation');
var lien_niveau       = $('#lien_niveau')      ;

lien_chercher    .on('click',{value:'div_chercher'}    , switchSection);
lien_session     .on('click',{value:'div_session'}     , switchSection);
lien_entreprise  .on('click',{value:'div_entreprise'}  , display      );
lien_responsable .on('click',{value:'div_responsable'} , display      );
lien_jury        .on('click',{value:'div_jury'}        , display      );

lien_candidat    .on('click',{value:'div_candidat'}    , switchSection);
lien_competence  .on('click',{value:'div_competence'}  , display      );
lien_projet      .on('click',{value:'div_projet'}      , display      );

lien_titre       .on('click',{value:'div_titre'}       , switchSection);
lien_ccp         .on('click',{value:'div_ccp'}         , display      );
lien_habilitation.on('click',{value:'div_habilitation'}, display      );
lien_niveau      .on('click',{value:'div_niveau'}      , display      );



var btn_filtrer_session           = $('#btn_filtrer_session')          ;
var btn_select_session            = $('#btn_select_session')           ;
var btn_input_session             = $('#btn_input_session')            ;
var btn_ajouter_jour              = $('#btn_ajouter_jour')             ;
var btn_retirer_jour              = $('#btn_retirer_jour')             ;

var btn_filtrer_candidat          = $('#btn_filtrer_candidat')         ;
var btn_select_candidat           = $('#btn_select_candidat')          ;
var btn_input_candidat            = $('#btn_input_candidat')           ;

var btn_select_titre              = $('#btn_select_titre')             ;
var btn_input_titre               = $('#btn_input_titre')              ;

var btn_effacer_rechercher        = $('#btn_effacer_rechercher')       ;


var btn_associer_titre            = $('#btn_associer_titre')           ;
var btn_ajouter_jour              = $('#btn_ajouter_jour')             ;
var btn_retirer_jour              = $('#btn_retirer_jour')             ;
var btn_valider_session           = $('#btn_valider_session')          ;
var btn_effacer_session           = $('#btn_effacer_session')          ;


var btn_identification            = $('#btn_identification')           ;
var btn_associer_session          = $('#btn_associer_session')         ;
var btn_ajouter_select_competence = $('#btn_ajouter_select_competence');
var btn_retirer_select_competence = $('#btn_retirer_select_competence');
var btn_ajouter_competence        = $('#btn_ajouter_competence')       ;
var btn_retirer_competence        = $('#btn_retirer_competence')       ;
var btn_valider_candidat          = $('#btn_valider_candidat')         ;
var btn_effacer_candidat          = $('#btn_effacer_candidat')         ;

var btn_ajouter_select_ccp        = $('#btn_ajouter_select_ccp')       ;
var btn_retirer_select_ccp        = $('#btn_retirer_select_ccp')       ;
var btn_ajouter_ccp               = $('#btn_ajouter_ccp')              ;
var btn_ajouter_select_hab        = $('#btn_ajouter_select_hab')       ;
var btn_retirer_select_hab        = $('#btn_retirer_select_hab')       ;
var btn_ajouter_hab               = $('#btn_ajouter_hab')              ;
var btn_charger_pdf_hab           = $('#btn_charger_pdf_hab')          ;
var btn_valider_titre             = $('#btn_valider_titre')            ;
var btn_effacer_titre             = $('#btn_effacer_titre')            ;

var btn_valider_form              = $('#btn_valider_form')             ;

btn_filtrer_session          .on('click', ajaxFiltrerSessions)                   ;
btn_select_session           .on('click', {value:'select'}, ajaxChercherSession) ;
btn_input_session            .on('click', {value:'input' }, ajaxChercherSession) ;

btn_filtrer_candidat         .on('click', ajaxFiltrerCandidats)                  ;
btn_select_candidat          .on('click', {value:'select'}, ajaxChercherCandidat);
btn_input_candidat           .on('click', {value:'input' }, ajaxChercherCandidat);

btn_select_titre             .on('click', {value:'select'}, ajaxChercherTitre)   ; 
btn_input_titre              .on('click', {value:'input' }, ajaxChercherTitre)   ; 

btn_effacer_rechercher       .on('click', cleanFullForm)                         ;


btn_associer_titre           .on('click', ajaxAssocierTitre)                     ;
btn_ajouter_jour             .on('click', ajaxAjouterJour)                       ;
btn_retirer_jour             .on('click', ajaxRetirerJour)                       ;
btn_valider_session          .on('click', ajaxRecordSession)                     ; 
btn_effacer_session          .on('click', cleanFullForm)                         ; 


btn_identification           .on('click', {value:'liste'}, ajaxChercherCandidat) ;
btn_associer_session         .on('click', ajaxAssocierSession)                   ;
btn_ajouter_select_competence.on('click', ajaxAjouterSelectCompetence)           ;
btn_retirer_select_competence.on('click', ajaxRetirerSelectCompetence)           ;
btn_ajouter_competence       .on('click', ajaxAjouterCompetence)                 ;
btn_retirer_competence       .on('click', ajaxRetirerCompetence)                 ;
btn_valider_candidat         .on('click', ajaxRecordCandidat)                    ; 
btn_effacer_candidat         .on('click', cleanFullForm)                         ;


btn_ajouter_select_ccp       .on('click', ajaxAjouterSelectCcp)                  ;
btn_retirer_select_ccp       .on('click', ajaxRetirerSelectCcp)                  ;
btn_ajouter_ccp              .on('click', ajaxAjouterCcp)                        ;
btn_ajouter_select_hab       .on('click', ajaxAjouterSelectHabilitation)         ;
btn_retirer_select_hab       .on('click', ajaxRetirerSelectHabilitation)         ;
btn_ajouter_hab              .on('click', ajaxAjouterHabilitation)               ;
btn_valider_titre            .on('click', ajaxRecordTitre)                       ; 
btn_effacer_titre            .on('click', cleanFullForm)                         ;

btn_valider_form             .on('click', validerFullForm)                       ;

function ajaxRetirerJour()
{

}

function ajaxRetirerSelectCompetence()
{

}

function ajaxRetirerCompetence()
{

}

function ajaxRetirerSelectCcp()
{

}

function ajaxRetirerSelectHabilitation()
{

}

function ajaxFiltrerSessions()
{
    var select = document.getElementById('select_titre');
    var titre  = select.options[select.selectedIndex].text;                    
    var debut  = document.getElementById('date_debut_chercher_session').value; 
    var fin    = document.getElementById('date_fin_chercher_session'  ).value;
    
    if(debut == "") debut = "0000-01-01";
    if(fin   == "") fin   = "3000-12-01";  

    $.ajax({
        type    :   "POST",
        url     :   "/ajax_filtrer_sessions",
        data    :   {
                        debut : debut,
                        fin   : fin,
                        titre : titre,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        document.getElementById('info-msg').innerHTML = "";
                        select = document.getElementById('select_session');
                        if(response.data != 'pas de résultat')
                        {
                            select.innerHTML = '<option value="0">'+response.data.length+' résultats trouvés</option>';
                            for(var i=0; i<response.data.length; i++)
                            {
                                select.innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                            }
                        }
                        else
                        {
                            select.innerHTML = '<option value="0">Pas de résultats trouvés</option>';
                        }
                    }
    });
}

function validerFullForm()
{   
    var identifiant    = document.getElementById('identifiant').value;
    var identification = document.getElementById('identification').value;
    var libelle_court  = document.getElementById('libelle_court').value;

    if(identifiant != "" || identifiant != null)
    {
        var resultat = ajaxRecordSession().then(function() {
            if(identification != "" || identification != null)
            {
                ajaxRecordCandidat().then(function() {
                    document.getElementById('info-msg').innerHTML = "Enregistrement candidat effectué";
                });
            }
            if(libelle_court != "" || libelle_court != null)
            {
                ajaxRecordTitre().then(function() {
                    document.getElementById('info-msg').innerHTML = "Enregistrement titre effectué";
                });
            }
        });
    }
}

function ajaxFiltrerCandidats()
{
    var select  = document.getElementById('select_titre');
    var titre   = select.options[select.selectedIndex].text;                    //titre libelle_court
        select  = document.getElementById('select_session');
    var session = select.options[select.selectedIndex].text;                    //session identifiant
    var debut   = document.getElementById('date_debut_chercher_session').value; //session debut
    var fin     = document.getElementById('date_fin_chercher_session'  ).value; //session fin

    if(debut == "") debut = "0000-01-01";
    if(fin   == "") fin   = "3000-12-01";

    $.ajax({
        type    :   "POST",
        url     :   "/ajax_filtrer_candidats",
        data    :   {
                        debut  : debut,
                        fin    : fin,
                        titre  : titre,
                        session: session,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        document.getElementById('info-msg').innerHTML = "";
                        select = document.getElementById('select_candidat'); //session identification
                        if(response.data != 'pas de résultat')
                        {
                            select.innerHTML = '<option value="0">'+response.data.length+' résultats trouvés</option>';
                            for(var i=0; i<response.data.length; i++)
                            {
                                select.innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                            }
                        }
                        else
                        {
                            select.innerHTML = '<option value="0">Pas de résultats trouvés</option>';
                        }
                    }
    });
}

function filtrerCandidatsBySession(identifiant)
{
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_filtrer_candidats_by_session",
        data    :   {
                        identifiant : identifiant,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        document.getElementById('info-msg').innerHTML = "";
                        select = document.getElementById('select_identification'); //session identification
                        if(response.data != 'pas de résultat')
                        {
                            select.innerHTML = '<option value="0">'+response.data.length+' résultats trouvés</option>';
                            for(var i=0; i<response.data.length; i++)
                            {
                                select.innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                            }
                        }
                        else
                        {
                            select.innerHTML = '<option value="0">Pas de résultats trouvés</option>';
                        }
                    }
    });
}

function ajaxChercherSession(eventMouseClick)
{
    var identifiant = "";
    var value       = eventMouseClick.data.value;
    if(value == 'select')
    {
        var select  = document.getElementById('select_session');
        identifiant = select.options[select.selectedIndex].text; 
    }
    else
    {
        var input = document.getElementById('input_session').value;
        if(input != "" || input != 'undefined') identifiant = input;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_chercher_session",
        data    :   {
                        identifiant : identifiant,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        document.getElementById('info-msg').innerHTML = "";
                        cleanFullForm(true);
                        if(response.data != 'pas de résultat') displayInFormBySession(response.data);
                    }
    });
}

function ajaxAssocierTitre()
{
    var select      = document.getElementById('associer_titre');
    var libelle     = select.options[select.selectedIndex].text;
    var identifiant = document.getElementById('identifiant').value;
    if(identifiant == "" || identifiant == 'undefined')
    {
        document.getElementById('info-msg').innerHTML = "Pas d'identifiant session";
        return;
    }
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_associer_titre",
        data    :   {
                        libelle     : libelle,
                        identifiant : identifiant,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        if(response.data != 'pas de résultat') displayInFormByTitre(response.data);
                        document.getElementById('info-msg').innerHTML = "Association titre enregistrée";
                    }
    });
    return resultat;
}

function ajaxAjouterJour()
{
    var identifiant = document.getElementById('identifiant').value;
    var input_jour  = document.getElementById('input_jour').value;
    if((identifiant == "") || (identifiant == 'undefined')) 
    {
        document.getElementById('info-msg').innerHTML = "Pas d'identifiant session";
        return;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_ajouter_jour",
        data    :   {
                        identifiant : identifiant,
                        input_jour  : input_jour,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        ajaxFillSelectJour(identifiant);
                        document.getElementById('info-msg').innerHTML = "Jour ajouté";
                    }
    });
}

function ajaxRecordSession()
{
    var form = getFormValuesSession();
    var identifiant = form[0];
    if((identifiant == "") || (identifiant == 'undefined')) 
    {
        document.getElementById('info-msg').innerHTML = "pas d'identifiant session";
        return;
    }
    if(form[1] == "" || form[2] == "")
    {
        document.getElementById('info-msg').innerHTML = "pas de date";
        return;
    }
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_record_session",
        data    :   {
                        form : form,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        ajaxFillSelectSession();
                        document.getElementById('info-session').innerHTML= identifiant;
                        document.getElementById('info-msg').innerHTML = "Session enregistrée";
                    }
    });
    $(document).ajaxStop(function(){ displaySelectSelected(identifiant, 'associer_session'); } );
    return resultat;
}

function ajaxDeleteSession()
{
    $.ajax({
        type    : "POST",
        url     : "/ajax_delete",
        data    : { 
                    entity  : 'session',
                    session : document.getElementById('input_session').value,
                  },
        dataType: "json",
        success : function(response) {
                    ajaxFillSelectSession();
                }
    });
}

function ajaxChercherCandidat(eventMouseClick)
{
    var identification = "";
    var value = eventMouseClick.data.value;
    if(value == 'select')
    {
        var select     = document.getElementById('select_candidat');
        identification = select.options[select.selectedIndex].text; 
    }
    else if(value == 'input')
    {
        var input = document.getElementById('input_candidat').value;
        if(input != "" || input != 'undefined') identification = input;
        else 
        {
            document.getElementById('info-msg').innerHTML = "Pas d'identification candidat";
            return;
        }
    }
    else
    {
        var select     = document.getElementById('select_identification');
        identification = select.options[select.selectedIndex].text;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_chercher_candidat",
        data    :   {
                        identification : identification,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        cleanFullForm(true);   
                        if(response.data != 'pas de résultat') displayInFormByCandidat(response.data);
                    }
    });
}

function ajaxAssocierSession()
{
    var select               = document.getElementById('associer_session');
    var selectIdentifiant    = select.options[select.selectedIndex].text;
    var identifiant          = document.getElementById('identifiant').value;
    var identification       = document.getElementById('identification').value;
    if(identification == "" || identification == 'undefined')
    {
        document.getElementById('info-msg').innerHTML = "pas d'identification candidat";
        return;
    }
    if(identifiant == "" || identifiant == 'undefined')
    {
        document.getElementById('info-msg').innerHTML = "pas d'identifiant session";
        return;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_associer_session",
        data    :   {
                        selectIdentifiant : selectIdentifiant,
                        identifiant       : identifiant,
                        identification    : identification,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        if(response.data != 'pas de résultat')
                        {
                            document.getElementById('info-msg').innerHTML = "Association session enregistrée";
                            displayInFormBySession(response.data);
                        }
                    }
    });
}

function ajaxAjouterSelectCompetence()
{
    var select         = document.getElementById('select_competence');
    var description    = select.options[select.selectedIndex].text;
    var identification = document.getElementById('identification').value;
    if(identification == "" || identification == 'undefined')
    {
        document.getElementById('info-msg').innerHTML = "pas d'identification";
        return;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_ajouter_select_competence",
        data    :   {
                        identification : identification,
                        description    : description,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        if(response.data != 'pas de résultat')
                        {
                            addCompetenceHtml(description, response.data);
                            document.getElementById('info-msg').innerHTML = "Compétence ajoutée";
                        }
                    }
    });
}

function ajaxAjouterCompetence()
{
    var form = getFormValuesCandidat();
    var identification = form[0];
    if((identification == "") || (identification == 'undefined')) 
    {
        document.getElementById('info-msg').innerHTML = "Pas d'identification";
        return;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_ajouter_competence",
        data    :   {
                        form : form,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        addCompetenceHtml(form[4],form[5]);
                        ajaxFillSelectCompetence();
                        document.getElementById('info-msg').innerHTML = "Compétence ajoutée";
                    }
    });
}

function ajaxRecordCandidat()
{ 
    var form = getFormValuesCandidat();
    var identification = form[0];
    if((identification == "") || (identification == 'undefined')) 
    {   
        document.getElementById('info-msg').innerHTML = "Pas d'identification candidat";
        return;
    }
    var identifiant = form[1];
    if((identifiant == "") || (identifiant == 'undefined')) 
    {
        document.getElementById('info-msg').innerHTML = "Pas d'identifiant session";
        return;
    }
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_record_candidat",
        data    :   {
                        form : form,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        ajaxFillSelectCandidat();
                        filtrerCandidatsBySession(identifiant);
                        document.getElementById('info-msg').innerHTML = "Candidat enregistré";
                    }
    });
    return resultat;
}

function ajaxDeleteCandidat()
{
    console.log(document.getElementById('input_candidat').value);
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_delete",
        data    :   { 
                        entity  : 'candidat',
                        candidat: document.getElementById('input_candidat').value,
                        session : document.getElementById('input_session').value,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        ajaxFillSelectCandidat();
                    }
    });
}

function ajaxChercherTitre(eventMouseClick)
{
    var libelle = "";
    var value = eventMouseClick.data.value;
    if(value == 'select')
    {
        var select = document.getElementById('select_titre');
        libelle    = select.options[select.selectedIndex].text; 
    }
    else
    {
        var input = document.getElementById('input_titre').value;
        if(input != "" || input != 'undefined') libelle = input;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_chercher_titre",
        data    :   {
                         libelle : libelle,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        document.getElementById('info-msg').innerHTML = "";
                        cleanFullForm();
                        if(response.data != 'pas de résultat')
                            displayInFormByTitre(response.data);
                    }
    });
}

function ajaxAjouterSelectCcp()
{
    var select        = document.getElementById('select_ccp');
    var libelle_ccp   = select.options[select.selectedIndex].text;
    var libelle_titre = document.getElementById('libelle_court').value;
    if(libelle_titre == "" || libelle_titre == 'undefined')
    {
        document.getElementById('info-msg').innerHTML = "Pas de libellé court";
        return;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_ajouter_select_ccp",
        data    :   {
                        libelle_titre : libelle_titre,
                        libelle_ccp   : libelle_ccp,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        if(response.data != 'pas de résultat')
                        {
                            addCcpHtml(response.data,libelle_ccp);
                            document.getElementById('info-msg').innerHTML = "Ccp ajouté";
                        }
                    }
    });
}

function ajaxAjouterCcp()
{
    var form = [];
    form[0] = document.getElementById('libelle_court'  ).value; //titre
    form[1] = document.getElementById('saisir_ccp_code').value; //ccp
    form[2] = document.getElementById('saisir_ccp_lib' ).value; //ccp
    if((form[0] == "") || (form[0] == 'undefined')) 
    {
        document.getElementById('info-msg').innerHTML = "Pas de libellé court";
        return;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_ajouter_ccp",
        data    :   {
                        form : form,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        addCcpHtml(form[1],form[2]);
                        ajaxFillSelectCcp();
                        document.getElementById('info-msg').innerHTML = "Ccp ajoutée";
                    }
    }); 
}

function ajaxAjouterSelectHabilitation()
{
    var select             = document.getElementById('select_hab');
    var titre_habilitation = select.options[select.selectedIndex].text;
    var libelle_court      = document.getElementById('libelle_court').value;
    if(libelle_court == "" || libelle_court == 'undefined')
    {
        document.getElementById('info-msg').innerHTML = "Pas de libellé court";
        return;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_ajouter_select_habilitation",
        data    :   {
                        libelle_court      : libelle_court,
                        titre_habilitation : titre_habilitation,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        if(response.data != 'pas de résultat')
                        {
                            addHabilitationHtml(titre_habilitation, response.data[0].date.split(' ')[0], response.data[1].date.split(' ')[0]);
                            document.getElementById('info-msg').innerHTML = "Habilitation ajoutée";
                        }
                    }
    });
}

function ajaxAjouterHabilitation()
{
    var form = [];
    form[0] = document.getElementById('libelle_court'   ).value; //titre
    form[1] = document.getElementById('saisir_hab_titre').value; //habilitation
    form[2] = document.getElementById('saisir_hab_debut').value; //habilitation
    form[3] = document.getElementById('saisir_hab_fin'  ).value; //habilitation
    if((form[0] == "") || (form[0] == 'undefined')) 
    {
        document.getElementById('info-msg').innerHTML = "Pas de libelle court";
        return;
    }
    $.ajax({
        type    :   "POST",
        url     :   "/ajax_ajouter_habilitation",
        data    :   {
                        form : form,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        addHabilitationHtml(form[1],form[2],form[3]);
                        ajaxFillSelectHabilitation();
                        document.getElementById('info-msg').innerHTML = "Habilitation ajoutée";
                    }
    }); 
}

function ajaxRecordTitre()
{ 
    var form = getFormValuesTitre();
    var libelle = form[0];
    if((libelle == "") || (libelle == 'undefined')) 
    {
        document.getElementById('info-msg').innerHTML = "Pas de libellé-court";
        return;
    }
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_record_titre",
        data    :   { 
                        form : form,
                    },
        dataType:   "json",
        success :   function(response) 
                    {
                        ajaxFillSelectTitre();
                        document.getElementById('info-titre').innerHTML= libelle;
                        document.getElementById('info-msg').innerHTML  = "Titre enregistré";
                    }
    });
    return resultat;
}

function ajaxDeleteTitre()
{
    $.ajax({
        type    : "POST",
        url     : "/ajax_delete",
        data    : { 
                    entity : 'titre',
                    raison : document.getElementById('input_raison_sociale').value,
                  },
        dataType: "json",
        success : function(response) {
                    //console.log(response.data);
                }
    });
}

function ajaxFillSelectSession()
{
    var select_session   = document.getElementById('select_session');
    var associer_session = document.getElementById('associer_session');
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_fill_select_session",
        dataType:   "json",
        success :   function(response)
                    {
                        select_session  .innerHTML = '<option value="0">selection session</option>';
                        associer_session.innerHTML = '<option value="0">association session</option>';
                        for(var i=0; i<response.data.length; i++)
                        {
                            select_session  .innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                            associer_session.innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                        }
                    },
        error   :   function(xhr, textStatus, errorThrown) {
                        if (textStatus == 'timeout') {
                        this.tryCount++;
                        if (this.tryCount <= this.retryLimit) {
                            $.ajax(this);
                            return;
                        }
                        return;
                        }
                        if (xhr.status == 500) {
                            console.log('ajaxfillselectsession error 500');
                        } else {
                            console.log('ajaxfillselectsession error');
                        }
                    }
    });
    return resultat;
}
    

function ajaxFillSelectCandidat()
{ 
   var select_candidat = document.getElementById('select_candidat');
   
   var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_fill_select_candidat",
        dataType:   "json",
        success :   function(response) 
                    {
                        select_candidat.innerHTML = '<option value="0">selection candidat</option>';
                        for(var i=0; i<response.data.length; i++)
                            select_candidat.innerHTML += '<option value="'+i+'">'+response.data[i]+'</option>';
                    }
    });
    return resultat;
}


function ajaxFillSelectTitre()
{
    var select_titre   = document.getElementById('select_titre');
    var associer_titre = document.getElementById('associer_titre');
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_fill_select_titre",
        dataType:   "json",
        success :   function(response) 
                    {
                        select_titre  .innerHTML = '<option value="0">selection titre</option>';
                        associer_titre.innerHTML = '<option value="0">association titre</option>';
                        for(var i=0; i<response.data.length; i++)
                        {
                            select_titre  .innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                            associer_titre.innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                        }
                    }
    });
    return resultat;
}


/*
* display in select input some values from db
*/
function ajaxFillSelectJour(identifiant)
{
    var select_jour = document.getElementById('select_jour');
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_fill_select_jour",
        data    :   { 
                        identifiant : identifiant,
                    },
        dataType:   "json",
        success :   function(response)
                    {
                        select_jour.innerHTML = "";
                        for(var i=0; i<response.data.length; i++)
                        {
                            select_jour.innerHTML += '<option value="'+i+'">'+response.data[i].date.split(' ')[0]+'</option>';
                        }
                    }
    });
    return resultat;
}

function ajaxFillSelectCompetence()
{
    var select_competence = document.getElementById('select_competence');
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_fill_select_competence",
        dataType:   "json",
        success :   function(response)
                    {
                        select_competence.innerHTML = '<option value="0">selection compétence</option>';
                        for(var i=0; i<response.data.length; i++)
                        {
                            select_competence.innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                        }
                    }
    });
    return resultat;
}

function ajaxFillSelectCcp()
{
    var select_ccp = document.getElementById('select_ccp');
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_fill_select_ccp",
        dataType:   "json",
        success :   function(response)
                    {
                        select_ccp.innerHTML = '<option value="0">selection ccp</option>';
                        for(var i=0; i<response.data.length; i++)
                        {
                            select_ccp.innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                        }
                    }
    });
    return resultat;
}

function ajaxFillSelectHabilitation()
{
    var select_hab = document.getElementById('select_hab');
    var resultat = $.ajax({
        type    :   "POST",
        url     :   "/ajax_fill_select_habilitation",
        dataType:   "json",
        success :   function(response)
                    {
                        select_hab.innerHTML = '<option value="0">selection habilitation</option>';
                        for(var i=0; i<response.data.length; i++)
                        {
                            select_hab.innerHTML += '<option value="'+(i+1)+'">'+response.data[i]+'</option>';
                        }
                    }
    });
    return resultat;
}

function addCompetenceHtml(val1,val2)
{
    document.getElementById('affichage_competence').innerHTML +=
    '<div class="mb-2" id="'+val1+'">'                                               +
        '<div class="row mx-0 input-group mb-1">'                                    +
            '<label class="col-sm-12 col-md-3 input-group-text">Description</label>' +
            '<div class="form-control">'+val1+'</div>'                               +
        '</div>'                                                                     +
        '<div class="row mx-0 input-group mb-1">'                                    +
            '<label class="col-sm-12 col-md-3 input-group-text">Commentaire</label>' +
            '<div class="form-control">'+val2+'</div>'                               +
        '</div>'                                                                     +
    '</div>';
    return;
}

function addCcpHtml(val1,val2)
{
    document.getElementById('affichage_ccp').innerHTML +=
    '<div class="mb-2" id="'+val1+'">'                                                                        +
        '<div class="row mx-0 input-group mb-1">'                                                             +
            '<label class="col-sm-12 col-md-3 input-group-text d-flex justify-content-center">Code</label>'   +
            '<div class="form-control"><a href="assets/pdf/'+val1+'.pdf">'+val1+'</a></div>'                  +
            '<div class="col-xs-0 col-sm-0 col-md-2"></div>'                                                  +
        '</div>'                                                                                              +
        '<div class="row mx-0 input-group mb-1">'                                                             +
            '<label class="col-sm-12 col-md-3 input-group-text d-flex justify-content-center">Libellé</label>'+
            '<div class="form-control">'+val2+'</div>'                                                        +
            '<div class="col-xs-0 col-sm-0 col-md-2"></div>'                                                  +
        '</div>'                                                                                              +
    '</div>';
    return;

}

function addHabilitationHtml(val1,val2,val3)
{
    document.getElementById('affichage_hab').innerHTML +=
    '<div class="mb-2" id="'+val1+'">'                                                                             +
        '<div class="row mx-0 input-group mb-1">'                                                                  +
            '<label class="col-sm-12 col-md-3 input-group-text d-flex justify-content-center">Habilitation</label>'+
            '<div class="form-control"><a href="assets/pdf/'+val1+'.pdf">'+val1+'</a></div>'                       +
            '<div class="col-xs-0 col-sm-0 col-md-2"></div>'                                                       +
        '</div>'                                                                                                   +
        '<div class="row mx-0 input-group mb-1">'                                                                  +
            '<label class="col-sm-12 col-md-3 input-group-text d-flex justify-content-center">Date début</label>'  +
            '<div class="form-control">'+val2+'</div>'                                                             +
            '<div class="col-xs-0 col-sm-0 col-md-6"></div>'                                                       +
        '</div>'                                                                                                   +
        '<div class="row mx-0 input-group mb-1">'                                                                  +
            '<label class="col-sm-12 col-md-3 input-group-text d-flex justify-content-center">Date fin</label>'    +
            '<div class="form-control">'+val3+'</div>'                                                             +
            '<div class="col-xs-0 col-sm-0 col-md-6"></div>'                                                       +
        '</div>'                                                                                                   +
    '</div>';
    return;
}

/**
 * display in select input the value found in db 
 */
function displaySelectSelected(toBeSelected, id) 
{  
    var label                                     ;
    var select = document.getElementById(id)      ;
    for(var i = 0; i < select.options.length; i++) 
    {
        label = select.options[i].label           ;
        if(label == toBeSelected) select.value=i  ;
    }
}

function displayInFormBySession(array)
{
    for(var i=0; i<=array.length; i++)
    {
        if(array[i] == "startsession")
        {
            i++                                                                           ;
            document.getElementById('identifiant').value   = array[i]                     ; //session
            document.getElementById('session_debut').value = array[i+1].date.split(' ')[0]; //session debut
            document.getElementById('session_fin'  ).value = array[i+2].date.split(' ')[0]; //session fin
            ajaxFillSelectJour(array[i])                                                  ;
            displaySelectSelected(array[i], 'associer_session')                           ;
            document.getElementById('info-session').innerHTML = array[i]                  ;
            i+=3                                                                          ;
        }

        else if(array[i] == "startentreprise")
        {
            i++                                                       ;
            document.getElementById('raison_sociale').value = array[i];
            i+=1                                                      ;
        }

        else if(array[i] == "startresponsable")
        {
            i++                                                      ;
            document.getElementById('resp_fonction').value = array[i];
            i+=1                                                     ;
        }

        else if(array[i] == "starttitre")
        {
            i++                                                        ;
            document.getElementById('libelle_court').value = array[i]  ;
            document.getElementById('ref_doc'      ).value = array[i+1];
            displaySelectSelected(array[i],'associer_titre')           ;
            document.getElementById('info-titre').innerHTML = array[i] ;
            i+=2                                                       ;
        }

        else if(array[i] == "startccp")
        {
            i++;
            document.getElementById('affichage_ccp').innerHTML = "";
            while(array[i] != "endccp")
            {
                addCcpHtml(array[i], array[i+1]);
                i+=2;
            }
        }

        else if(array[i] == "starthab")
        {
            i++;
            document.getElementById('affichage_hab').innerHTML = "";
            while(array[i] != "endhab")
            {
                addHabilitationHtml(array[i], array[i+1].date.split(' ')[0], array[i+2].date.split(' ')[0]);
                i+=3;
            }
        }

        else if(array[i] == "startniveau")
        {
            i++;
            document.getElementById('niveau_code').value = array[i]; 
            document.getElementById('niveau_lib' ).value = array[i+1];
            i+=2;
        }

        else if(array[i] == "startcandidats")
        {
            i++;
            select_identification = document.getElementById('select_identification');
            select_identification.innerHTML = '<option value="0">liste candidats de la session:</option>';
            while(array[i] != "endcandidats")
            {
                select_identification.innerHTML += '<option value="'+(i+1)+'">'+array[i]+'</option>';
                i+=1;
            }
        }
    }
}

function displayInFormByCandidat(array)
{
    for(var i=0; i<=array.length; i++)
    {
        if(array[i] == "startsession")
        {
            i++;
            document.getElementById('identifiant').value   = array[i];                      //session
            document.getElementById('session_debut').value = array[i+1].date.split(' ')[0]; //session debut
            document.getElementById('session_fin'  ).value = array[i+2].date.split(' ')[0]; //session fin
            displaySelectSelected(array[i],'associer_session');
            ajaxFillSelectJour(array[i]);
            i+=3;
        }
        else if(array[i] == "startentreprise")
        {
            i++;
            document.getElementById('raison_sociale').value = array[i];
            i+=1;
        }
        else if(array[i] == "startresponsable")
        {
            i++;
            document.getElementById('resp_fonction').value = array[i];
            i+=1;
        }
        else if(array[i] == "startcandidat")
        {
            i++;
            document.getElementById('identification').value = array[i];
            i+=1;
        }
        else if(array[i] == "startprojet")
        {
            i++;
            document.getElementById('projet_nom').value = array[i];
            i+=1;
        }

        else if(array[i] == "startproduit")
        {
            i++;
            document.getElementById('produit_nom').value = array[i];
            i+=1;
        }

        else if(array[i] == "startcompetence")
        {
            i++;
            document.getElementById('affichage_competence').innerHTML = "";
            while(array[i] != "endcompetence")
            {
                addCompetenceHtml(array[i], array[i+1]);
                i+=2;
            }
        }

        else if(array[i] == "starttitre")
        {
            i++;
            document.getElementById('libelle_court').value = array[i];
            document.getElementById('ref_doc'      ).value = array[i+1];
            displaySelectSelected(array[i],'associer_titre');
            i+=2;
        }

        else if(array[i] == "startccp")
        {
            i++;
            document.getElementById('affichage_ccp').innerHTML = "";
            while(array[i] != "endccp")
            {
                addCcpHtml(array[i], array[i+1]);
                i+=2;
            }
        }

        else if(array[i] == "starthab")
        {
            i++;
            document.getElementById('affichage_hab').innerHTML = "";
            while(array[i] != "endhab")
            {
                addHabilitationHtml(array[i], array[i+1].date.split(' ')[0], array[i+2].date.split(' ')[0]);
                i+=3;
            }
        }

        else if(array[i] == "startniveau")
        {
            i++;
            document.getElementById('niveau_code').value = array[i]; 
            document.getElementById('niveau_lib' ).value = array[i+1];
            i+=2;
        }
    }
    document.getElementById('info-msg').innerHTML = "Candidat affiché";
}

function displayInFormByTitre(array)
{
    for(var i=0; i<=array.length; i++)
    {
        if(array[i] == "starttitre")
        {
            i++;
            document.getElementById('libelle_court').value = array[i];
            document.getElementById('ref_doc'      ).value = array[i+1];
            i+=2;
        }

        else if(array[i] == "startccp")
        {
            i++;
            document.getElementById('affichage_ccp').innerHTML = "";
            while(array[i] != "endccp")
            {
                addCcpHtml(array[i], array[i+1]);
                i+=2;
            }
        }

        else if(array[i] == "starthab")
        {
            i++;
            document.getElementById('affichage_hab').innerHTML = "";
            while(array[i] != "endhab")
            {
                addHabilitationHtml(array[i], array[i+1].date.split(' ')[0], array[i+2].date.split(' ')[0]);
                i+=3;
            }
        }

        else if(array[i] == "startniveau")
        {
            i++;
            document.getElementById('niveau_code').value = array[i]; 
            document.getElementById('niveau_lib' ).value = array[i+1];
            i+=2;
        }
    }
}

function getFormValuesSession()
{
    var array = [];
    array[0] = document.getElementById('identifiant'   ).value; //session
    array[1] = document.getElementById('session_debut' ).value; //session debut
    array[2] = document.getElementById('session_fin'   ).value; //session fin
    array[3] = document.getElementById('raison_sociale').value; //raison social
    array[4] = document.getElementById('resp_fonction' ).value; //responsable
    return array;
}

function getFormValuesCandidat()
{
    var array = [];
    array[0]  = document.getElementById('identification' ).value; //candidat
    array[1]  = document.getElementById('identifiant'    ).value; //session
    array[2]  = document.getElementById('projet_nom'     ).value; //projet
    array[3]  = document.getElementById('produit_nom'    ).value; //produit
    array[4]  = document.getElementById('competence_desc').value; //competence
    array[5]  = document.getElementById('competence_comm').value; //competence
    return array;
}

function getFormValuesTitre()
{
    var array = [];
    array[0] = document.getElementById('libelle_court').value; //titre
    array[1] = document.getElementById('ref_doc'      ).value; //titre
    array[2] = document.getElementById('niveau_code'  ).value; //niveau
    array[3] = document.getElementById('niveau_lib'   ).value; //niveau
    array[4] = document.getElementById('identifiant'  ).value; //session
    return array;
}

/*
* changer de section dans l'affichage
*/
function switchSection(eventMouseClick)
{
    var array = ['div_session','div_candidat','div_titre','div_chercher'];
    var value = eventMouseClick.data.value;
    if($("#"+value).hasClass('d-none'))
    {   
        $("#"+value).removeClass('d-none'); 
        $("#"+value).addClass('d-block');
        for(var i = 0; i<4; i++)
        {
            if(array[i] != value)
            {
                $("#"+array[i]).removeClass('d-block'); 
                $("#"+array[i]).addClass('d-none');
            }
        }
    }
    else
    {
        $("#"+value).removeClass('d-block');     
        $("#"+value).addClass('d-none');
        for(var i = 0; i<4; i++)
        {
            if(array[i] != value)
            {
                $("#"+array[i]).removeClass('d-block'); 
                $("#"+array[i]).addClass('d-none');
            }
        }
    }
    eventMouseClick.preventDefault();
    
}
/*
* afficher ou désafficher les sous-sections
*/
function display(eventMouseClick)
{
    var value = eventMouseClick.data.value;
    if($("#"+value).hasClass('d-none'))
    {   
        $("#"+value).removeClass('d-none'); 
        $("#"+value).addClass('d-block');
    }
    else
    {
        $("#"+value).removeClass('d-block');     
        $("#"+value).addClass('d-none');
    }
    eventMouseClick.preventDefault();
}

function cleanFullForm()
{
    var arrayValue = ['identifiant','session_debut','session_fin','input_jour','raison_sociale','entreprise_tel','resp_fonction','resp_mobile',
                      'identification','projet_nom','produit_nom','competence_desc','competence_comm',
                      'libelle_court','ref_doc','saisir_ccp_code','saisir_ccp_lib','saisir_hab_titre','saisir_hab_debut','saisir_hab_fin','niveau_code','niveau_lib',
                      'input_candidat','input_session','date_debut_chercher_session','date_fin_chercher_session','input_titre']
    
    var arrayInnerHtml = ['info-session','info-titre','info-msg','select_jour','affichage_competence','select_identification',
                          'affichage_ccp','affichage_hab'];

    var arraySelect = [['association titre'     , 'associer_titre'   ],
                       ['association session'   , 'associer_session' ],
                       ['selection compétence'  , 'select_competence'],
                       ['selection ccp'         , 'select_ccp'       ],
                       ['selection habilitation', 'select_hab'       ]];
    
    for(var i = 0 ; i < arrayValue.length     ; i++) document.getElementById(arrayValue[i]).value         = ""; 
    for(    i = 0 ; i < arrayInnerHtml.length ; i++) document.getElementById(arrayInnerHtml[i]).innerHTML = "";          
    for(    i = 0 ; i < arraySelect.length    ; i++) displaySelectSelected(arraySelect[i][0], arraySelect[i][1]);
   
    var resultat = ajaxFillSelectCandidat().then(function() {
        ajaxFillSelectSession().then(function() {
            ajaxFillSelectTitre();
        });
    });
    return resultat;
}

cleanFullForm().then(function() {

    ajaxFillSelectCompetence().then(function() {

        ajaxFillSelectCcp().then(function() {

            ajaxFillSelectHabilitation().then(function() {

                document.getElementById('info-statut').innerHTML = "Ok";
            });
        });
    });
});
