document.addEventListener("DOMContentLoaded", function() {
        var form = document.getElementById("quiz");

 form.addEventListener("submit", function(event) {
                var answeredQuestions = 0;

        var questions = form.querySelectorAll("input[type='checkbox']");

        questions.forEach(function(question) {

            if (question.checked) {

                answeredQuestions++;

                console.log(answeredQuestions)

            }

        });

        if (answeredQuestions !== 10) {

            event.preventDefault(); // Voorkom dat het formulier wordt verzonden

            alert("Niet alle vragen zijn ingevuld. Zorg ervoor dat alle vragen zijn ingevuld voordat je verder gaat.");
        }
   });
 });
