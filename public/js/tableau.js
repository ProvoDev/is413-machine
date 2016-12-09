var workbook;
var activeSheet;
var viz;

function initViz()
{
    var placeholderDiv = document.getElementById("tableauViz");
    var url = "https://public.tableau.com/views/Checkpoint/Dashboard1?:embed=y&:display_count=yes";

    var options = {
        width: "1050px",
        height: "600px",
        hideTabs: true,
        hideToolbar: true,
        onFirstInteractive: function () {
            workbook = viz.getWorkbook();
            activeSheet = workbook.getActiveSheet();
            console.log(activeSheet);
        }
    }

    viz = new tableau.Viz(placeholderDiv, url);
    viz.addEventListener(tableau.TableauEventName.MARKS_SELECTION, onMarksSelection);




    /*    viz.addEventListener("marksselection",getMarks);*/

//     function getMarks(e){
//         console.log('Result of getMarks:');
//         console.log(e);
//         var ws = getMarksAsync(e).getPairs();
//         console.log('Worksheet obj:');
//         console.log(ws);
//         var ws_name = ws.getName();
//
// // Here you can route for specific worksheets based on the object defined at the beginning
//         if ( worksheets_to_listen_on[ws_name]) {
//             console.log('Marks selection being routed from ' + ws_name);
//             e.getMarksAsync().then( handleMarksSelection );
//         }
//     }


}

function regionFilter(region) {
    var sheet = viz.getWorkbook().getActiveSheet().getWorksheets().get("Sheet 1");

    if(region == "All")
    {
        console.log("Filter all!!!");
        sheet.clearFilterAsync("Country Region");
    }
    else
    {
        console.log("Filter: "+region);
        sheet.applyFilterAsync("Country Region", region, tableau.FilterUpdateType.REPLACE);
    }

    var sheet = viz.getWorkbook().getActiveSheet().getWorksheets().get("Sheet 2");

    if(region == "All")
    {
        console.log("Filter all!!!");
        sheet.clearFilterAsync("Country Region");
    }
    else
    {
        console.log("Filter: "+region);
        sheet.applyFilterAsync("Country Region", region, tableau.FilterUpdateType.REPLACE);
    }

    var sheet = viz.getWorkbook().getActiveSheet().getWorksheets().get("Sheet 3");

    if(region == "All")
    {
        console.log("Filter all!!!");
        sheet.clearFilterAsync("Country Region");
    }
    else
    {
        console.log("Filter: "+region);
        sheet.applyFilterAsync("Country Region", region, tableau.FilterUpdateType.REPLACE);
    }
}

function displaySheet(singleSheet) {
    var workbook = viz.getWorkbook();

    workbook.activateSheetAsync(singleSheet)
        .then(function (dashboard) {
            var worksheets = dashboard.getWorksheets();
        });
}

function selectCluster(cluster_num) {

    var sheet = viz.getWorkbook().getActiveSheet().getWorksheets().get("Sheet 3");
    console.log("I'm selecting a cluster!!!!");
    console.log(cluster_num);
    sheet.selectMarksAsync("Clusters (1)", "Cluster "+cluster_num, tableau.SelectionUpdateType.REPLACE);
}

function queryDashboard() {
    //workbook = viz.getWorkbook();

    workbook.activateSheetAsync("Sheet 1")
        .then(function (dashboard) {
            var worksheets = dashboard.getWorksheets();

        });
}


function onMarksSelection(marksEvent) {
    return marksEvent.getMarksAsync().then(reportSelectedMarks);
    console.log('found a mark');
}

function reportSelectedMarks(marks) {
    var html = "";
    console.log(marks);
    console.log("found some marks");
    for (var markIndex = 0; markIndex < marks.length; markIndex++) {
        var pairs = marks[markIndex].getPairs();
        var counter = markIndex + 1;
        console.log(pairs);
        html += '<ul class="list-group"><li class="list-group-item">Company Name ' + counter + " of " + marks.length +':<span class="badge">'+ pairs[0].formattedValue +"</span></li>";

        for (var pairIndex = 1; pairIndex < pairs.length; pairIndex++) {
            var pair = pairs[pairIndex];
            html += '<li class="list-group-item">'+pair.fieldName+':<span class="badge"> '+ pair.formattedValue + '</span></li>';
        }

        html += "</ul>";
    }

    var infoDiv = document.getElementById('mark-details');
    infoDiv.innerHTML = html;
}


