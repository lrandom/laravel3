<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto p-20 space-y-10 ">
    @for($i=0;$i<count($questions);$i++)
        <div class="question-item question-item-{{$i}} hidden">
            <div class="border-2 shadow p-10">
                {{$questions[$i]->question}}
            </div>

            <div class="grid grid-cols-2 gap-4">
                @for($j=0;$j < count($questions[$i]->answers); $j++)
                    <div class="col-span-1 border-2 rounded p-4" onclick="answerQuestion({{$j}},{{$questions[$i]->index_correct_answer}})">
                        {{$questions[$i]->answers[$j]}}
                    </div>
                @endfor
            </div>
        </div>
    @endfor

    <style>
        .hidden {
            display: none
        }
    </style>

    <script>
        let activeIndexQuestion = 0;
        let score = 0;

        function displayQuestion() {
            const questions = document.querySelectorAll('.question-item');
            for (let i = 0; i < questions.length; i++) {
                questions[i].classList.add('hidden');
            }
            const activeQuestion  = document.querySelector(`.question-item-${activeIndexQuestion}`);
            activeQuestion.classList.remove('hidden');
        }

        displayQuestion();

        function answerQuestion(answerIndex,indexCorrectAnswer) {
            if (answerIndex == indexCorrectAnswer) {
                alert("Bạn đã trả lời đúng");
                score+=10;
                if(activeIndexQuestion<<?php echo count($questions); ?>){
                    activeIndexQuestion++;
                }else{
                    alert("Số điểm của bạn là " + score);
                    return;
                }
                displayQuestion();
            }else{
                alert("Bạn đã trả lời sai");
                alert("Số điểm của bạn là " + score);
                return;
            }
        }
    </script>
</div>
</body>
</html>
