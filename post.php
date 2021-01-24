<div class="feedback_resp">
        <div class="feedback_user">
            <div class="text"><text>Name : <?php echo $row['name'] ?></text></div>
            <div class="text"><text>Course : <?php echo $row['class'] ?></text></div>
            <div class="text"><text>Class : <?php echo $row['year'] ?></text></div>
            <div class="text"><text>Academin Year : <?php echo $row['academic_year'] ?></text></div>
        </div>
        <div class="feedback_ans">
            <div class="line">
                <div class="questions">1. Are you satisfied with the teaching staff and their teaching methods?</div>
                <div class="answers"><?php echo $row['Q1'] ?></div>
            </div>
            <div class="line">
                <div class="questions">2. How supportive were the faculty members?</div>
                <div class="answers"><?php echo $row['Q2'] ?></div>
            </div>
            <div class="line">
                <div class="questions">3. How about your overall experience with this college?</div>
                <div class="answers"><?php echo $row['Q3'] ?></div>
            </div>
            <div class="line">
                <div class="questions">4. Pace of the Teaching/lecture</div>
                <div class="answers"><?php echo $row['Q4'] ?></div>
            </div>
            <div class="line">
                <div class="questions">5. Office staff are cooperative</div>
                <div class="answers"><?php echo $row['Q5'] ?></div>
            </div>
            <div class="line">
                <div class="questions">6. Notes Quality</div>
                <div class="answers"><?php echo $row['Q6'] ?></div>
            </div>
            <div class="line">
                <div class="questions">7. Project Guidance (if applicable)</div>
                <div class="answers"><?php echo $row['Q7'] ?></div>
            </div>
            <div class="line">
                <div class="questions">8. Grievances are redressed / problems are solved well in time</div>
                <div class="answers"><?php echo $row['Q8'] ?></div>
            </div>
            <div class="line">
                <div class="questions">9. Toilets and Washrooms are clean and well maintained</div>
                <div class="answers"><?php echo $row['Q9'] ?></div>
            </div>
            <div class="line">
                <div class="questions">10. Classes are clean and well maintained</div>
                <div class="answers"><?php echo $row['Q10'] ?></div>
            </div>
        </div>
    </div>