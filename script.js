$(document).ready(function () {

    /* =========================
       1. SELECTORS
    ========================= */
    $("#selectorBtn").click(function () {

        // Basic Selectors
        $("p").css("border", "1px solid black");
        $("#title").css("color", "purple");
        $(".demo").css("background", "lightblue");
        $("h2, p").css("font-family", "Arial");

        // Hierarchy Selectors
        $(".parent p").css("color", "green");        // descendant
        $(".parent > p").css("font-weight", "bold"); // direct child

        // Sibling Selectors
        $(".demo:first").next().css("background", "pink");
        $(".demo:first").nextAll().css("border", "2px dashed gray");

        // Filter Selectors
        $("p:first").css("color", "red");
        $("p:last").css("color", "blue");
        $("p:eq(1)").css("background", "yellow");
        $("p:even").css("border", "2px solid orange");
        $("p:odd").css("border", "2px dotted black");
        $("p:not(.demo)").css("font-style", "italic");
    });

    /* =========================
       2. ATTRIBUTE METHODS
    ========================= */
    $("#changeImg").click(function () {
        $("#myImg").attr("src", "https://via.placeholder.com/300");
    });

    $("#disableCheck").click(function () {
        $("#check").prop("disabled", true);
    });

    $("#getVal").click(function () {
        let val = $("#inputVal").val();
        $("#output").text("Entered Value: " + val);
    });

    /* =========================
       3. EVENT HANDLING
    ========================= */

    // Mouse Events
    $("#clickBtn").click(function () {
        $("#eventOutput").text("Button Clicked");
    });

    $("#dblBtn").dblclick(function () {
        $("#eventOutput").text("Double Clicked");
    });

    $("#clickBtn").mouseenter(function () {
        $(this).css("background", "lightgreen");
    });

    $("#clickBtn").mouseleave(function () {
        $(this).css("background", "");
    });

    $("#clickBtn").mousedown(function () {
        $("#eventOutput").text("Mouse Down");
    });

    $("#clickBtn").mouseup(function () {
        $("#eventOutput").text("Mouse Up");
    });

    // Keyboard Events
    $("#keyInput").keydown(function () {
        $("#eventOutput").text("Key Down");
    });

    $("#keyInput").keyup(function () {
        $("#eventOutput").text("Key Up");
    });

    $("#keyInput").keypress(function () {
        $("#eventOutput").text("Key Press");
    });

    // Form Events
    $("#myForm").submit(function (e) {
        e.preventDefault();
        $("#eventOutput").text("Form Submitted");
    });

    $("#keyInput").focus(function () {
        $(this).css("background", "lightyellow");
    });

    $("#keyInput").blur(function () {
        $(this).css("background", "");
    });

    $("#keyInput").change(function () {
        $("#eventOutput").text("Input Changed");
    });

    // on() & off()
    $("#clickBtn").on("click", function () {
        console.log("Event attached using ON");
    });

    /* =========================
       4. STYLE METHODS
    ========================= */
    $("#colorBtn").click(function () {
        $("#text").css({
            "color": "white",
            "background": "black"
        });
    });

    $("#addClassBtn").click(function () {
        $("#text").addClass("highlight");
    });

    $("#toggleBtn").click(function () {
        $("#text").toggleClass("highlight");
    });

    /* =========================
       5. DOM TRAVERSING
    ========================= */
    $("#traverseBtn").click(function () {

        // Parent
        $(".child").parent().css("border", "2px solid red");
        $(".child").parents().css("background", "#eee");

        // Children
        $(".parent").children().css("color", "blue");
        $(".parent").find(".child").css("font-size", "18px");

        // Siblings
        $(".child").first().next().css("background", "pink");
        $(".child").last().prev().css("background", "lightgreen");

        // Filtering
        $(".child").first().css("font-weight", "bold");
        $(".child").last().css("font-style", "italic");
        $(".child").eq(1).css("color", "orange");
        $(".child").not(":first").css("border", "2px dashed black");
    });

    /* =========================
       6. EFFECTS
    ========================= */
    $("#hideBtn").click(function () {
        $("#box").toggle();
    });

    $("#fadeBtn").click(function () {
        $("#box").fadeToggle(1000);
    });

    $("#slideBtn").click(function () {
        $("#box").slideToggle(1000);
    });

    $("#animateBtn").click(function () {
        $("#box")
            .animate({ left: "200px" }, 1000)
            .animate({ top: "100px" }, 1000)
            .animate({ opacity: 0.5 }, 1000)
            .animate({ width: "200px", height: "200px" }, 1000);
    });

    /* =========================
       7. ANIMATION CONTROL
    ========================= */
    $("#stopBtn").click(function () {
        $("#box").stop();
    });

});