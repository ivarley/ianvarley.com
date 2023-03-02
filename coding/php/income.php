<?php
    # PHP Code to show your personal share of the US federal budget expenditures
    ini_set("register_globals", "1");

    $TaxesPaid = $_POST["TaxesPaid"][0];
 ?>
<html><head><title>Show me the money ...</title></head>
<body>
<img src="IncomeTitle.jpg"><BR>
Ever wondered where all that money you pay in taxes is <i>actually</i> being spent? Try this: enter the amount you paid in federal taxes in the box below, and see for yourself. Keep in mind, this is <i>real money</i> that you paid the government for its work. And don't forget that you own the government, and if you don't like these figures, you can work to change them. (Also, see my <a href="#caveats">caveats</a>.)<BR>
<form action="income.php" method="POST">
Enter how much you paid in taxes this year:<input type="Text" Name="TaxesPaid[]" value="<?php print($TaxesPaid)?>"> <input type="Submit" Value="Where did it go?">
<p><?php

    if (empty($TaxesPaid)) { }
    else if ((! is_numeric($TaxesPaid))) { print("Enter a number, with no commas."); }
    else {

    $values = array(
"<b>Military Spending</b>: Military personnel " => 4.37058072722294,
"<b>Military Spending</b>: Operation and maintenance " => 5.88456119740486,
"<b>Military Spending</b>: Procurement " => 3.2858852678394,
"<b>Military Spending</b>: Research, development, test and evaluation " => 2.73072965202298,
"<b>Military Spending</b>: Military Construction, Family Housing and Other " => 0.495532697649974,
"<b>Military Spending</b>: Atomic Energy Defense Activities " => 0.764056655021796,
"<b>Military Spending</b>: Defense Related activities " => 0.121454092561268,
"<b>Iraq War</b>: Iraq War" => 2.20825622838669,
"<b>Veterans and Military Retirement</b>: Military retirement pensions" => 1.56477036343481,
"<b>Veterans and Military Retirement</b>: Pensions & Income security for veterans" => 1.39870949506013,
"<b>Veterans and Military Retirement</b>: Veterans education, training, and rehabilitation" => 0.105112996471207,
"<b>Veterans and Military Retirement</b>: Hospital and medical care for veterans" => 1.15845121741166,
"<b>Veterans and Military Retirement</b>: Housing and other veterans benefits and services" => 0.056089708201022,
"<b>International affairs</b>: International development aid and financial programs" => 0.349787786576452,
"<b>International affairs</b>: International military aid" => 0.323730363081489,
"<b>International affairs</b>: Conduct of Foreign Affairs" => 0.333005039240713,
"<b>International affairs</b>: Foreign information and exchange activities" => 0.0437234733220565,
"<b>General science, space, and technology</b>: National Science Foundation programs" => 0.23893332391144,
"<b>General science, space, and technology</b>: Department of Energy & Homeland Security general science programs" => 0.158111145952487,
"<b>General science, space, and technology</b>: Space flight, research, and supporting activities" => 0.639511003740786,
"<b>Non-Defense Energy Spending</b>: Energy supply and conservation" => 0.0229658647752216,
"<b>Non-Defense Energy Spending</b>: Energy information, preparedness, & regulation" => 0.0158994448443842,
"<b>Natural resources and environment</b>: Water resources" => 0.211992597925122,
"<b>Natural resources and environment</b>: Forest Service, Conservation and land management" => 0.463292156715528,
"<b>Natural resources and environment</b>: Recreational & Park resources" => 0.133820327440234,
"<b>Natural resources and environment</b>: Pollution control and abatement" => 0.3352132954691,
"<b>Natural resources and environment</b>: Other natural resources" => 0.198301409309125,
"<b>Agriculture</b>: Farm income stabilization & crop insurance" => 0.750365466405798,
"<b>Agriculture</b>: Agricultural research and services" => 0.183285266956095,
"<b>Commerce and housing credit</b>: Mortgage credit" => -0.00794972242219209,
"<b>Commerce and housing credit</b>: Postal service" => 0.00264990747406403,
"<b>Commerce and housing credit</b>: Deposit insurance" => 0,
"<b>Commerce and housing credit</b>: Other advancement of commerce" => 0.389536398687413,
"<b>Transportation</b>: Highways & Highway safety" => 1.38016014274168,
"<b>Transportation</b>: Mass transit" => 0.319313850624716,
"<b>Transportation</b>: Railroads" => 0.0481399857788299,
"<b>Transportation</b>: Air Transportion" => 0.767148213741537,
"<b>Transportation</b>: Water transportation" => 0.286190007198915,
"<b>Transportation</b>: Other transportation" => 0.0181077010727709,
"<b>Community and regional development</b>: Community development" => 0.228333694015184,
"<b>Community and regional development</b>: Area and regional development" => 0.105112996471207,
"<b>Community and regional development</b>: Disaster relief and insurance" => 0.26719900363479,
"<b>Education, training, employment, and social services</b>: Elementary, Secondary & Vocational education" => 1.57890320329648,
"<b>Education, training, employment, and social services</b>: Higher education" => 0.996365210248075,
"<b>Education, training, employment, and social services</b>: Research and general education aids" => 0.127637210000751,
"<b>Education, training, employment, and social services</b>: Training and employment" => 0.31357238443091,
"<b>Education, training, employment, and social services</b>: Rehabilitation services" => 0.132495373703202,
"<b>Education, training, employment, and social services</b>: Other social and family services" => 0.463292156715528,
"<b>Non-Medicare Health Spending</b>: Medicaid grants" => 8.06190183859414,
"<b>Non-Medicare Health Spending</b>: State Children's Health Insurance" => 0.032682192180123,
"<b>Non-Medicare Health Spending</b>: Federal employees' and retired employees' health benefits" => 0.328146875538262,
"<b>Non-Medicare Health Spending</b>: Indian health" => 0.127637210000751,
"<b>Non-Medicare Health Spending</b>: Substance abuse and mental health services" => 0.149719772284618,
"<b>Non-Medicare Health Spending</b>: Health research, training and disease control" => 1.48659809294992,
"<b>Non-Medicare Health Spending</b>: Consumer and occupational health and safety" => 0.127195558755073,
"<b>Non-Medicare Health Spending</b>: Other health care services" => 0.54102277595474,
"<b>Medicare</b>: Hospital insurance (HI)" => 7.08717753938425,
"<b>Medicare</b>: Supplementary medical insurance (SMI)" => 4.07069953140803,
"<b>Medicare</b>: Medicare modernization (proposed)" => 0.264990747406403,
"<b>Non-SS Retirement and Unemployment</b>: General retirement and disability insurance (excluding social security)" => 0,
"<b>Non-SS Retirement and Unemployment</b>: Civilian retirement and disability programs" => 2.37255049177866,
"<b>Non-SS Retirement and Unemployment</b>: Unemployment compensation" => 1.90484182260636,
"<b>Social Welfare Spending</b>: Housing assistance" => 1.33025355198014,
"<b>Social Welfare Spending</b>: Food stamps" => 1.22469890426326,
"<b>Social Welfare Spending</b>: Other nutrition programs (WIC, school lunches)" => 0.787464171042694,
"<b>Social Welfare Spending</b>: Supplemental security income (SSI)" => 1.47820671928205,
"<b>Social Welfare Spending</b>: Family support payments" => 0.781281053603212,
"<b>Social Welfare Spending</b>: Earned Income Tax Credit (EITC)" => 1.38590160893549,
"<b>Social Welfare Spending</b>: Low income home energy assistance" => 0.0883302491354677,
"<b>Social Welfare Spending</b>: Child care funds" => 0.212875900416477,
"<b>Social Welfare Spending</b>: Other family and child support" => 0.77156472619831,
"<b>Social security</b>: Old-age and survivors insurance(OASI)" => 18.4720633504547,
"<b>Social security</b>: Disability insurance (DI)" => 3.55926738891367,
"<b>Administration of justice</b>: Federal Law Enforcement" => 0.745507302703347,
"<b>Administration of justice</b>: Federal litigation and judicial activities" => 0.437234733220565,
"<b>Administration of justice</b>: Federal prison activities" => 0.261015886195307,
"<b>Administration of justice</b>: Criminal justice assistance" => 0.267640654880467,
"<b>General government administration</b>: Legislative functions" => 0.148836469793263,
"<b>General government administration</b>: Executive Office programs" => 0.0291489822147043,
"<b>General government administration</b>: Collection of taxes & fiscal opertations" => 0.498624256369715,
"<b>General government administration</b>: General property and records management" => 0.0370987046368964,
"<b>General government administration</b>: General purpose fiscal assistance (DC, Puerto Rico, etc.)" => 0.10290474024282,
"<b>General government administration</b>: Other general government" => 0.0437234733220565,
"<b>Net interest</b>: Interest paid on national public debt" => 15.5611399901953,
"<b>Net interest</b>: Civil Service retirement/disability surplus" => -1.70963197201698,
"<b>Net interest</b>: Military retirement surplus" => -0.604620555332276,
"<b>Net interest</b>: Medicare surplus" => -0.764498306267473,
"<b>Net interest</b>: Social Security trust fund surpluses" => -3.91700489791231,
"<b>Net interest</b>: Other interest surpluses" => -1.37751023526762,
"<b>Undistributed offsetting receipts</b>: Employer share, employee retirement (off-budget)" => -2.18484871236579,
"<b>Undistributed offsetting receipts</b>: Rents and royalties on the Outer Continental Shelf" => -0.175777195779581,
"<b>Undistributed offsetting receipts</b>: Spectrum Auction" => -0.00839137366786943
    );
    print("Here's what you spent. Keep in mind, this is money that could've been in your bank account:<BR><BR><table border=0>");
    arsort($values);
    foreach($values as $key => $value) {
    Print("<tr><td>$".number_format((($value/100) * $TaxesPaid), 2, '.', '')."</td><td>&nbsp;</td><td>".$key.".</td></tr>");
    }
    Print("</table>");
    }

 ?>
<hr>
<BR><a name="caveats">Caveats:<BR>
<ul>
<li>This simulation doesn't take into account that some large part of the federal budget comes from other sources besides income tax. If you know of a way for me to figure that in, <a href="mailto:ivarley@spamcop.net">let me know</a>.
<li>This also doesn't take into account any possibility that money from different people is divided up differently. That's way too complicated! I just took the total national budget, figured out what % is spent on what, and then divded your income tax up by the same %s.
<li>These numbers are based on information I pulled out of the <a href="http://www.budgetsim.org/nbs/">National Budget Simulator</a> and I can't vouch for their correctness.
<li>This is just version .01, and I've never written a php page before so cut me some slack.
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
<BR><BR><BR><BR><BR><BR><BR>

</body>
</html>