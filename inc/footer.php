        <!-- CREATE USER 'cmhcc_admin'@'localhost' IDENTIFIED BY 'abcdefgh'; -->
        </div>

<!-- aside -->
<div class="col-2 text-white" style="background : #3c3d32">
  3 of 3
</div>
</div>




<div class="center-div" style="color: red;">
<?php
$person = [
  'first_name' => 'ahsan',
  'last_name' => 'kabir',
  'email' => 'makabir@yahoo.com'
];
echo $person['first_name'];
?>
<br>
<?php
$people = [
  [
    'first_name' => 'mamun',
  'last_name' => 'mamun',
  'email' => 'mamun@yahoo.com'
  ],
  [
    'first_name' => 'rakib',
  'last_name' => 'hasan',
  'email' => 'rakab@yahoo.com'
  ],
  ['first_name' => 'faisal',
  'last_name' => 'ahmed',
  'email' => 'faisal@yahoo.com']
];
echo $people[0]['email'];
echo $person['first_name'];
echo date("s");
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>