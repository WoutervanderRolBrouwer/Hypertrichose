document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("quiz");
    form.addEventListener("submit", function(event) {
        var answeredQuestions = 0;
        var questions = form.querySelectorAll("input[type='radio']");
        questions.forEach(function(question) {
            if (question.checked) {
                answeredQuestions++;
            }
        });
        if (answeredQuestions !== 10) {
            event.preventDefault(); // Voorkom dat het formulier wordt verzonden
            alert("Gelieve alle 10 vragen te beantwoorden voordat u verder gaat.");
        }
    });
});
