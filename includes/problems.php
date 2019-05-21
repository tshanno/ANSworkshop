<?php
//$problemlist = [];
$problemlist = array();
$subproblemlist = array();
$uparrow = "&uarr;";
$downarrow = "&darr;";
$rightarrow = "&rarr;";

//This is also defined in functions.js.  If you change it here you have to change it there.
abstract class ProblemType {
	const multiplechoice = 0;
	const calculation = 1;
	const lesson = 2;
}

function CreateMultipleChoice ($name, $problemtype, $imgsrc, $problemtext, $problemanswer, $problemchoices, $attemptonefeedbackimgsrc, $attemptonefeedback, $problemexplanationimgsrc, $problemexplanation) {
	$problem = array();
	$problem['name'] = $name;
	$problem['problemtype'] = $problemtype;
	$problem['imgsrc'] = $imgsrc;
	$problem['problemtext'] = $problemtext;
	$problem['problemanswer'] = $problemanswer;
	$problem['problemchoices'] = $problemchoices;
	$problem['attemptonefeedback'] = $attemptonefeedback;
	$problem['attemptonefeedbackimgsrc'] = $attemptonefeedbackimgsrc;
	$problem['problemexplanation'] = $problemexplanation;
	$problem['problemexplanationimgsrc'] = $problemexplanationimgsrc;
	return $problem;
}

function CreateCalculation ($name, $problemtype, $imgsrc, $problemtext, $problemanswer, $problemtolerance, $attemptonefeedbackimgsrc, $attemptonefeedback, $problemexplanationimgsrc, $problemexplanation) {
	$problem = array();
	$problem['name'] = $name;
	$problem['problemtype'] = $problemtype;
	$problem['imgsrc'] = $imgsrc;
	$problem['problemtext'] = $problemtext;
	$problem['problemanswer'] = $problemanswer;
	$problem['problemtolerance'] = $problemtolerance;
	$problem['attemptonefeedback'] = $attemptonefeedback;
	$problem['attemptonefeedbackimgsrc'] = $attemptonefeedbackimgsrc;
	$problem['problemexplanation'] = $problemexplanation;
	$problem['problemexplanationimgsrc'] = $problemexplanationimgsrc;
	return $problem;
}

function CreateLesson ($name, $problemtype, $imgsrc, $lessontext) {
	$problem = array();
	$problem['name'] = $name;
	$problem['problemtype'] = $problemtype;
	$problem['imgsrc'] = $imgsrc;
	$problem['lessontext'] = $lessontext;
	return $problem;
}
//Begin section 1
$ProblemName = '1. Heart';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/HeartReceptorsChart.png";
$LessonText = "<p style=\"margin:1.2em 0;\">Having said that, lets get started.  I will begin by going through the table above line by line, explaining the action of the relevant 
receptors (columns) upon the relevant organs (rows).</p>
<p style=\"margin:1.2em 0;\">At the top we see the actions of the four types of adrenergic receptors we will be concentrating upon (&alpha;<sub>1</sub>, &alpha;<sub>2</sub>, 
M, &beta;) on the heart rate.</p>
<p style=\"margin:1.2em 0;\">First note that the heart does not contain &alpha; receptors to any great extent.  Recent evidence for their existence does exist but their role 
in the physiological responses which we will be concentrating upon is minor or non-existent.  We will, therefore, ignore them and as far as this program is concerned, they are 
not present.</p>
<p style=\"margin:1.2em 0;\">&beta; receptors are involved in the sympathetic response.  They bind to norepinephrine (NE), which is released from the sympathetic nerve endings 
which are distributed over the surface of the cells throughout the heart.  Binding of NE to &beta; receptors caused an increase in heart rate.  Since CO=HR(SV), this means that 
the cardiac output is increased upon sympathetic stimulation.</p>
<p style=\"margin:1.2em 0;\">Note that these receptors also bind epinephrine, which is released from the adrenal gland during the sympathetic response.</p>
<p style=\"margin:1.2em 0;\">Often the sympathetic response is described as the &quot;fight-or-flight&quot; response.  Usually sympathetic tone increases in times of stress.  
If I'm confronted by a bear my body will (wisely) prepare itself to run away.  An increased heart rate to supply the skeletal muscle with blood at that point would be a good 
way to do that.</p>
<p style=\"margin:1.2em 0;\">Muscarinic receptors (M) bind to acetylcholine (Ach).  Ach is <strong><em>usually</em></strong> released from parasympathetic nerve endings and the 
M receptors are therefore usually involved with the parasympathetic response.  We will be covering two major exceptions to this rule later.</p>
<p style=\"margin:1.2em 0;\">The parasympathetic response usually opposes the sympathetic response.  You may think of sympathetic tone as being dominant when the body in not 
stressed, e.g when you are at rest or are eating.  So it will be no surprise that Ach binding to the receptor decreases heart rate.</p>
<p style=\"margin:1.2em 0;\">Let's take a look at the mechanisms by which these receptors act to change heart rate.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '1. Heart';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/HeartRateMechanisms.png";
$LessonText = "<p style=\"margin:1.2em 0;\">There are two figures above.  Let's start with the sinoatrial (SA) node action potential (the one with the slow rise and rounded peak) on the left.</p>
<p style=\"margin:1.2em 0;\">The resting potential of the SA node is not stable.  I rises slowly until it hits its threshold potential.  When the threshold potential is reached, 
a full action potential is generated which propagates away throughout the heart, causing contraction.  <em>The faster the rise of the resting potential, the faster threshold is 
reached and the faster the heart rate</em>.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);


$ProblemName = '1. Heart';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/HeartRateMechanisms.png";
$LessonText = "<p style=\"margin:1.2em 0;\">Now lets' take a look at the figure on the right.  
This demonstrates the mechanism of action of our two receptors.</p>
<p>The &beta; receptors of the heart (bottom) are primarily of the &beta;<sub>1</sub> subtype.  There are technically &beta;<sub>2</sub> receptors 
present but their function is something of a mystery and we will ignore them here.</p>
<p>In any case, <em>all &beta; receptors act via the same second messenger system</em>.  The activate a G protein (G<sub>s</sub>) which, in turn, stimulates adenylate cyclase to generate cAMP.  
cAMP activates protein kinase A (PKA) which has various physiological targets.  The two that are relevant here are the L-type Ca channel and the pacemaker channel (I<sub>f</sub>).</p>
<p>I<sub>f</sub> is active during the resting potential.  It allows positive charge in the form of Na<sup>+</sup> ions to enter, thus causing the membrane potential to rise faster.  
Thus the membrane reaches threshold faster and the heart rate increases.</p>
<p>The Ca channel is open during the upstroke.  Facilitating the opening of these channels lowers the threshold potential.  The resting potential, therefore, needs to rise less to achieve 
threshold when these channels are more active.  Thus threshold is reach faster and the heart rate is increased.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '1. Heart';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/HeartRateMechanisms.png";
$LessonText = "<p style=\"margin:1.2em 0;\">The M receptor in the SA node and atrial cells of the heart is the M<sub>2</sub> subtype.  <em>Even numbered M receptors and &alpha; receptors 
all act in the same way</em>.  They stimulate a G protein (G<sub>i</sub>) which decreases adenylate cyclase activity, thus decreasing cAMP and PKA activity and having the 
opposite effect of the &beta; receptor.  In addition, Ach binding to the M<sub>2</sub> activates a K<sup>+</sup> channel.  This channel is open during the resting potential 
and efflux of positive charge holds the membrane potential down and slows the rise in this phase.  Thus the membrane takes longer to reach threshold and the heart rate slows.</p>
<p style=\"margin:1.2em 0;\">One thing to note here is the concept of &quot;tone&quot;.  The sympathetic (S) and parasympathetic (PS) nervous systems are said to have tone 
because they are always on.  That is, both the S and PS are, to some extent, always active and always opposing each other.  Thus, if the PS system decreases, the effects of the 
S system will increase even in the absence of increased sympathetic stimulation.  Simply decreasing the parasympathetic response is sufficient for the existing S effects to 
become more dominant.</p>
<p style=\"margin:1.2em 0;\">This is an important concept to understand when it comes to applying these concepts to the pharmacology of the system (e.g. a PS blocker will increase 
the sympathetic effects without actually stimulating the S system).</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '1. Heart';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/ContractilityMechanisms.png";
$LessonText = "<p style=\"margin:1.2em 0;\">These receptors also have an effect upon the force of contraction of cardiac muscle, and therefore upon stroke volume.  Activation of Ca channels by the 
&beta; receptor causes more Ca to enter and increases Ca<sup>2+</sup>-induced Ca<sup>2+</sup> release.</p>
<p style=\"margin:1.2em 0;\">In addition, activation of PKA leads to troponin I (TnI) phosphorylation.  TnI phosphorylation leads to a <em>decrease</em> in myofilament Ca<sup>2+</sup> 
sensitivity.  This frequently confuses students because decreasing the Ca2+ binding to the myofilaments decreases contraction.  However note that the increase in Ca release is more than 
enough to make up for this and the force of contraction still increases.  The advantage of TnI phosphorylation is that the Ca<sup>2+</sup> is released quicker and, thus, relaxation is 
accelerated, allowing the muscle to completely relax before the next beat at the increased heart rate.</p>
<p style=\"margin:1.2em 0;\">Note also that the rate of Ca sequestration into the sarcoplasmic reticulum (SR) is also accelerated.  In addition to further increasing the rate of 
relaxation, this causes more SR Ca to be released on the next beat.  The SR Ca pump rate is accelerated by the phosphorylation of an accessory protein, phospholamban.  Phospholamban 
is usually bound to the pump and slows it down.  When it is phosphorylated it unbinds and, thus, the pump rate is accelerated.</p>
<p style=\"margin:1.2em 0;\">As with the heart rate, the binding of Ach to the M<sub>2</sub> receptor decreases cAMP and, thus, has the opposite effects.  However, <strong><em>note 
well</em></strong> that the effects are limited to the atria and <em>that there are <strong>no muscarinic receptors</strong> in the ventricle</em>.  Anatomists will tell you that the 
parasympathetic fibers are there but they have no functional effect and there is no parasympathetic response there.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);
array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 1


//Begin section 2
$ProblemName = '2.  Vascular Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/VascularReceptorsChart.png";
$LessonText = "<p style=\"margin:1.2em 0;\">OK, back to our chart.</p>
<p style=\"margin:1.2em 0;\">The effects of the ANS on vascular smooth muscle is complicated because all four receptors types have effects.  This leads to a mass of confusion which 
we will try to unravel.</p>
<p style=\"margin:1.2em 0;\">Note that the &alpha; receptors cause contraction (vasoconstriction) while the &beta; and M types cause relaxation (vasodilation).  Also note that, with 
only a few exceptions throughout the body, there is <em>no parasympathetic innervation of the vascular smooth muscle</em>.</p>"; 

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);


$ProblemName = '2. Vascular Smooth Muscle';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/VascularBetaMechanismsProblem.png";
$ProblemText = "<p style=\"margin:1.2em 0;\">Let's start with the &alpha;<sub>1</sub> receptor.</p>
<p style=\"margin:1.2em 0;\"><em>All odd numbered &alpha; and M receptors act through the same second messenger system.</em>  They activate a G protein (G<sub>q</sub>) 
which stimulates phospholipase C (PLC) to make IP<sub>3</sub>.  IP<sub>3</sub> causes the release of Ca<sup>2+</sup> from the SR (labeled &quot;ER&quot; here for endoplasmic 
reticulum - which is the same thing for our purposes).</p>
<p>The increased Ca<sup>2+</sup> binds to calmodulin (CaM) in vascular smooth muscle.  CaCaM stimulates myosin light chain kinase (MLCK) which phosphorylates 
myosin light chain (MLC) which causes contraction and vasoconstriction.</p>
<p style=\"margin:1.2em 0;\">Note that there is a myosin light chain phosphatase which cleaves the phosphate off of MLCK.  Therefore the amount of phosphorylated MLC is a result of 
the balance between MLCK activity and this phosphatase activity.</p>
<p style=\"margin:1.2em 0;\">Next we will look at the &beta; receptor pathway.  The relevant receptor is &beta;<sub>2</sub>.  Based upon what we have learned already, what is the 
relevant second messenger pathway?</p>
<p style=\"margin:1.2em 0;\">A)  activation of PLC and increased IP<sub>3</sub><br />
B)  increased cAMP an PKA activity</br>
C)  decreased cAMP and PKA activity</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'B';
$ProblemChoices = 'ABC';
$AttmeptOne = "<p><b>Hmmm...  I don't think we're getting the hang of this, yet</b></p> 
<p style=\"margin:1.2em 0;\">Remember that <em>all &beta; receptors act through the same second messenger system.</em></p>";
$AttmeptOneImgSrc = "./images/VascularBetaMechanismsProblem.png";
$ExplanationImgSrc = "./images/VascularBetaMechanismsAnswer.png";
$Explanation = "<p><em>All &beta; receptors act through the same second messenger system.</em>  &uarr; adenylate cyclase activity &rarr; &uarr; cAMP &rarr; &uarr; PKA. 
Therefore all you need to remember is the PKA target in the tissue of interest.</p>
<p>PKA phosphorylates MLCK which <em>decreases</em> its activity.  This leads ot <em>less</em> phosphorylated MLC, smooth muscle relaxation and vasodilation.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '2. Vascular Smooth Muscle';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/VascularAlpha2MechanismsProblem.png"; 
$ProblemText = "<p style=\"margin:1.2em 0;\">Next lets address the &alpha;<sub>2</sub> receptor pathway.  Based upon what we have learned already, what is the relevant second messenger pathway?</p>
<p style=\"margin:1.2em 0;\">A)  activation of PLC and increased IP<sub>3</sub><br />
B)  increased cAMP an PKA activity</br>
C)  decreased cAMP and PKA activity</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'C';
$ProblemChoices = 'ABC';
$AttmeptOne = "<p><b>Sorry, that's incorrect.</b></p>
<p style=\"margin:1.2em 0;\">Remember that <em>all even numbered &alpha; and M receptors act through the same second messenger system.</em></p>"; 
$AttmeptOneImgSrc = "./images/VascularAlpha2MechanismsProblem.png";
$ExplanationImgSrc = "./images/VascularAlpha2MechanismsAnswer.png";
$Explanation = "<p><p style=\"margin:1.2em 0;\"><em>All even numbered &alpha; and M receptors act through the same second messenger system.</em>  &darr; adenylate cyclase &rarr; &darr; cAMP &rarr; &darr; PKA.</p>
<p style=\"margin:1.2em 0;\">Recall that &uarr; PKA causes relaxation by phosphorylating MLCK.  &darr; PKA therefore causes contraction and vasoconstriction.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '2.  Vascular Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/VascularAlpha2MechanismsAnswer.png";
$LessonText = "<p style=\"margin:1.2em 0;\">Finally, let's talk M receptor.</p>
<p style=\"margin:1.2em 0;\">The relevant receptor is the M<sub>3</sub> receptor.  Therefore, like our odd numbered &alpha;<sub>1</sub>, our odd numbered M<sub>3</sub> acts by increasing IP<sub>3</sub>.  However, note that the receptor is in the endothelial cells of the vessel, not the smooth muscle.  Therefore, the Ca<sup>2+</sup> is released there.</p>
<p style=\"margin:1.2em 0;\">This leads to a special series of events that are endothelial cell-specific.  &uarr; Ca<sup>2+</sup> &rarr; &uarr; CaCaM &rarr; activation of nitric oxide synthase.  This leads to increased nitric oxide (NO).  Like most gases, NO crosses cell membranes easily and is therefore free to diffuse into the adjacent smooth muscle cell.  There it activates guanylate cyclase and increases cGMP.</p>
<p style=\"margin:1.2em 0;\">The increased cGMP &rarr;</p>\n
<ol style=\"margin-left:1em;padding-left:0.5em;text-indent:0;\">
  <li>&uarr; myosin light chain phosphatase activity</li>
  <li>&uarr; protein kinase G (PKG) &uarr; &rarr; phopholamban phosphorylation &rarr; &uarr; Ca<sup>2+</sup> uptake &darr; cytosolic [Ca<sup>2+</sup>].</li>
  <li>&uarr; K permeability of the membrane &rarr; &darr; membrane voltage &rarr; &darr; voltage gated Ca<sup>2+</sup> channel activity &rarr; &darr; cytosolic [Ca<sup>2+</sup>].</li>
</ol>
<p style=\"margin:1.2em 0;\">Each of these leads to smooth muscle relaxation and vasodilation.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '2.  Vascular Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/VascularAlpha2MechanismsAnswer.png";
$LessonText = "<p style=\"margin:1.2em 0;\">When looked at in the big picture, this all leads to a number of different questions.  Let's tackle them one by one.</p>
<p style=\"margin:1.2em 0;\">First, if there's no parasympathetic innervation of the vasculature, where does the Ach that binds to the M<sub>3</sub> receptor come from?</p>
<p style=\"margin:1.2em 0;\">The answer is sympathetic nerve endings.  Though these nearly always release NE, this is a rare exception where some of the fibers actually release Ach instead.  
This is known as <b>sympathetic cholinergic activation</b>.  It is not the only time that we will see it.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '2.  Vascular Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/VascularBlockers.png";
$LessonText = "<p style=\"margin:1.2em 0;\">The second question is, if all of these receptors are part of the sympathetic response, how come some cause vasodilation and some cause vasoconstriction?  Which is it?</p>
<p style=\"margin:1.2em 0;\">The simple answer is that the alpha receptors dominate and that <b>the steady-state sympathetic response results in vasoconstriction</b>.  The activation of M<sub>3</sub> does cause a temporary vasodilation, primarily in skeletal muscle, right before exercise.  This is known as the anticipatory response and is probably meant to give the muscle a little bit of extra blood before the exertion begins.  But it quickly disappears as the &alpha; receptors take over.</p>
<p style=\"margin:1.2em 0;\">Note the figure above.  This is an experiment done in an isolated section of blood vessel with the nerve connected to it intact.  The upper left panel shows the result.</p>
<p style=\"margin:1.2em 0;\">Upon nerve stimulation, the flow through the vessel decreases as the smooth muscle contracts and vasoconstriction takes place.</p>
<p style=\"margin:1.2em 0;\">Upon application of an &alpha; receptor blocker (upper right) stimulation of the same nerve results in increased flow due to muscle relaxation and vasodilation.  This is a result of stimulation of both &beta;<sub>2</sub> and M<sub>3</sub> receptors.</p>
<p style=\"margin:1.2em 0;\">Upon application of both an &alpha; and a muscarinic blocker (lower left), only the beta response remains, leading to less vasodilation that before.</p>
<p style=\"margin:1.2em 0;\">Finally, upon application of an &alpha;, &beta; and M blocker, there is no response (lower right).</p>
<p style=\"margin:1.2em 0;\">So, if the dominant steady-state response is vasoconstriction, why are the &beta; and M receptors even there?</p>
<p style=\"margin:1.2em 0;\">Beats me.  Find out and you can explain it to us when you pick up your Nobel Prize.  However, we are fortunate that they are all there because each can be leveraged pharmacologically to get a desired effect, either vasoconstriction or vasodilation (as demonstrated above).</p>"; 

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '2.  Vascular Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/Exercise.png";
$LessonText = "<p style=\"margin:1.2em 0;\">The last question that might come to mind is &quot;I thought we were talking about 'fight-or-flight' as being part of the sympathetic response.  Why in the world would you vasoconstrict, cutting off blood supply to the muscles, rather than vasodilate to supply more blood?&quot;</p>
<p style=\"margin:1.2em 0;\">Good question.</p>
<p style=\"margin:1.2em 0;\">Your body <em>does</em> want to supply more blood to the skeletal muscle.  But only to the exercising muscle.</p>
<p style=\"margin:1.2em 0;\">Imagine a person who is picking up a bar bell and doing curls with his or her left arm only.  Your body needs to supply more blood to the left arm but why would it waste blood by supplying it to the right, which is lazy and doing nothing?</p>
<p style=\"margin:1.2em 0;\">The sympathetic response is a general response designed to increase total peripheral resistance and maintain mean arterial blood pressure (MAP).  
The vasoconstriction that takes place happens everywhere, including the right arm which does not need more blood and, in fact, since its doing nothing, can afford to get less.  It also takes place in the left arm 
but there's a difference - because the left arm is active, there are local metabolites that are building in the arm as the energy supply is used up.  Those <b>local vasodilators dominate over the sympathetic nervous 
system response and override it</b>.  The result is vasodilation in the active area that needs more blood and vasoconstriction everywhere else to maintain MAP.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//end section 2

//begin section 3
$ProblemName = '3.  GI Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/GIReceptorsChart.png";
$LessonText = "<p style=\"margin:1.2em 0;\">Next, let's address the gastrointestinal tract.</p>
<p>This one should be conceptually more straight forward.  Ach resulting from parasympathetic stimulation causes an increase in motility, as would be expected when one is digesting food.  NE resulting from sympathetic stimulation causes decreased motility.  All four receptor types are present.</p>"; 

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '3.  GI Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/GIMuscarinicMechanism.png";
$LessonText = "<p>Some of the text on this figure is really small.  Don't worry about the fine print.  We'll be learing it later in another block.</p>
<p>The figure above is of a neuron which synapse on GI smooth muscle.  Let's start with the receptors on the smooth muscle and ignore the neuron for the moment.</p>
<p style=\"margin:1.2em 0;\">Begin with the M<sub>3</sub> receptor.  This is an odd numbered muscarinic so the second messenger system is one that generates IP<sub>3</sub>, leading to Ca<sup>2+</sup> 
release from the SR.  Ca<sup>2+</sup> binds to CaM.  CaCaM activates MLCK which phosphorylates MLC and causes contraction (i.e. increased motility).  This is as would be expected as part of the parasympathetic response when a person is at rest, perhaps enjoying a meal.</p>
<p style=\"margin:1.2em 0;\">This is exactly how it worked in vascular smooth muscle.  Two tissues.  Basically one mechanism and one response.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '3.  GI Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/GIBetaMechanism.png"; 
$LessonText = "<p style=\"margin:1.2em 0;\">The &beta;<sub>2</sub> receptor also works exactly as in vascular smooth muscle.</p>
<p style=\"margin:1.2em 0;\">Increased cAMP activates PKA.  PKA phosphorylates and inactivates MLCK such that more MLC is left unmodified.  This leads to relaxation (i.e. decreased motility) 
as would be expected as part of the sympathetic response when one is running away from a bear.</p>
<p style=\"margin:1.2em 0;\">Two tissues.  One mechanism.  One response.  One pattern to remember.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '3.  GI Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/GIAlpha1Mechanism.png"; 
$LessonText = "Unfortunately the &alpha;<sub>1</sub> is an outlier and one that just needs to be remembered.  NE biding to this receptor activates a K<sup>+</sup> channel.  
The K<sup>+</sup> influx decreases the membrane voltage (V<sub>m</sub>) which decreases voltage-gated Ca<sup>+2</sup> channel activation and acts to decrease cytosolic Ca<sup>2+</sup>.  
This causes decreased motility.";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '3.  GI Smooth Muscle';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/GIAlpha2Mechanism.png"; 
$LessonText = "<p style=\"margin:1.2em 0;\">Finally, we bring the neuron into it.  Some of the text in the figure above is small but its not important for you to know now and you may safely ignore it.  
Here's what you need to know about how the synapse works:</p>
<p style=\"margin:1.2em 0;\">An action potential opens N-type Ca<sup>2+</sup> channels to allow Ca<sup>2+</sup> influx into the neuron.  This causes exocytosis of neurotransmitter (Ach in this case) which stimulates the muscle to contract and increases motility.</p>
<p style=\"margin:1.2em 0;\">The &alpha;<sub>2</sub> receptor modifies this response.  This receptor is located on the presynaptic membrane (i.e. the neuron).  The receptor acts as it usually does, decreasing cAMP and PKA activity.  As in cardiac muscle, PKA usually activates the N-type Ca<sup>2+</sup> channel in this membrane.  &darr; PKA &rarr; &darr; Ca<sup>2+</sup> influx &rarr; &darr; Ach release &rarr; &darr; contraction and motility.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 3

//Begin section 4
$ProblemName = '4.  Glands';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/GlandReceptorsChart.png"; 
$LessonText = "Now we'll wrap the preliminaries up by briefly covering the response of both the salivary and sweat glands.  Both of these glands act in the same manner - secretions are increased as part of a cholinergic activation of the M<sub>3</sub> receptor.";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '4.  Glands';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/GlandMechanisms.png"; 
$LessonText = "<p>The M<sub>3</sub> receptor in the basolateral acts exactly as you should expect.  Odd numbered muscarinic receptors increase IP<sub>3</sub> and Ca<sup>2+</sup>.  
The Cl<sup>-</sup> channel and the K<sup>+</sup> channel in the apical membrane are both Ca<sup>2+</sup> activated, allowing Cl<sup>-</sup> and K<sup>+</sup> to pass into the lumen of the gland.  
The tight junctions are also loosened by the M<sub>3</sub> receptor activation, allowing Na<sup>+</sup> to pass.</p>
<p>This all acts to increase the osmolarity in the lumen and water follows past the loosened tight junctions between the cells down its concentration gradient.  Secretion is therefore increased.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '4.  Glands';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/GlandMechanisms.png"; 
$LessonText = "<p style=\"margin:1.2em 0;\">The salivary secretions increase in response to Ach as part of the parasympathetic response (as you should expect).  However, the increase in sweat gland secretion is <em>not</em> part of the parasympathetic response.</p>
<p style=\"margin:1.2em 0;\">Instead, the increase in sweat is due to sympathetic cholinergic activation.  As with the endothelial cells of the vasculature, this happens when some of the sympathetic fibers innervating the gland secrete Ach rather than NE.  The increase in secretions is, therefore, part of the sympathetic response.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 4

//Begin section 5
$ProblemName = '5. Problem 1';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/Problem1.png";
$ProblemText = "<p style=\"margin:1.2em 0;\">OK.  Time for some problems so that you can apply all of this.  About time.</p>
<p style=\"margin:1.2em 0;\">A patient comes into a physician’s office, reporting a serious mix up in medications.  The patient was mistakenly given the medication meant for someone else and took the pills for two weeks before checking the bottle, realizing it was not their own.  However, the patient lost the bottle and does not know the name of the medication or where it was filled.</p>
<p style=\"margin:1.2em 0;\">The individual complains of nausea.  Physical examination shows the patient exhibits mild bradycardia.  Heart rate did not significantly increase during mild exercise, and the patient quickly fatigued.  FEV1 (expiratory volume during the first second of a forced expiration) was reduced, indicative of bronchoconstriction.</p>
<p style=\"margin:1.2em 0;\">What was the medication?</p>
<p style=\"margin:1.2em 0;\">A)  an adrenergic β-blocker<br />
B)  an adrenergic α-blocker<br />
C)  a muscarinic-blocker?</p>
<p style=\"margin:1.2em 0;\">The bronchi have all three receptor types.</p>
<p style=\"margin:1.2em 0;\">Account for all the above symptoms.</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'A';
$ProblemChoices = 'ABC';
$AttmeptOne = "<p><b>That's incorrect.</b></p>
<p style=\"margin:1.2em 0;\">The patient has bradycardia.  This indicates blockage of a receptor whose activation would normally increase heart rate.</p>";
$AttmeptOneImgSrc = "./images/Problem1.png";
$ExplanationImgSrc = "./images/HeartRateMechanisms.png";
$Explanation = "<p style=\"margin:1.2em 0;\">Let's work our way through this, starting with the heart.</p>
<p style=\"margin:1.2em 0;\">Activation of the M<sub>3</sub> receptor ordinarily would decrease heart rate and blockage of this receptor would increase the heart rate.  Remember that there is sympathetic tone such that some outflow is always present.  A decrease on the parasympathetic side will therefore result in an increase in the effects of sympathetic outflow which is already there. Increased heart rate doesn't fit and the medication isn't a muscarinic blocker.</p>
<p style=\"margin:1.2em 0;\">However, activation of the &beta;<sub>1</sub> would ordinarily increase heart rate and blockage of this receptor would be expected to decrease it, resulting in bradycardia.</p>
<p style=\"margin:1.2em 0;\">Based upon your knowledge of what the &alpha; receptors do, would you predict that the effect of an &alpha; blocker would be on heart rate?</p>
<p style=\"margin:1.2em 0;\">A)  &alpha; receptor blockade would decrease heart rate.</br>
B)  &alpha; receptor blockade would leave heart rate unchanged. </br>
C)  &alpha; receptor blockade would increase heart rate.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '5. Problem 1';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/HeartRateMechanisms.png";
$ProblemText = "<p style=\"margin:1.2em 0;\">Based upon your knowledge of what the &alpha; receptors do, would you predict that the effect of an &alpha; blocker would be on heart rate?</p>
<p style=\"margin:1.2em 0;\">A)  &alpha; receptor blockade would decrease heart rate.</br>
B)  &alpha; receptor blockade would leave heart rate unchanged. </br>
C)  &alpha; receptor blockade would increase heart rate.</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'C';
$ProblemChoices = 'ABC';
$AttmeptOne = "<p><b>That's incorrect.</b></p> 
<p style=\"margin:1.2em 0;\">Remember that vasodilation decreases TPR and therefore decreases MAP.</p>";
$AttmeptOneImgSrc = "./images/HeartRateMechanisms.png";
$ExplanationImgSrc = "./images/Baroreflex.png";
$Explanation = "<p style=\"margin:1.2em 0;\">It is true that, for our purposes, there are no &alpha; receptors in the heart.  This might have led you to answer &quot;unchanged&quot;.  However, this is incorrect.</p>
<p style=\"margin:1.2em 0;\">&alpha; receptor stimulation causes <em>vasoconstriction</em>.  This increases total peripheral resistance (TPR).  Since MAP = CO(TPR), the mean arterial pressure (i.e MAP) rises.  
Increased MAP would increase the nerve impulses to the brain from the baroreceptors (as in the figure above).  This would cause the medulla in the brain to decrease sympathetic output through the relevant sympathetic 
neurons and increase parasympathetic output through the vagus nerve.  The baroreflex would therefore kick in to decrease heart rate, thus decreasing cardiac output and, therefore, MAP back towards the normal value.</p>
<p>As you would (I hope) expect, blockage of these receptors would therefore lead to <em>vasodilation</em> and decreased MAP and the opposite response (increased heart rate) would occur.  
The medication is, therefore, not an &alpha; blocker.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '5.  Problem 1';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/BronchialMechanism.png";
$LessonText = "<p style=\"margin:1.2em 0;\">Let's examine the bronchial smooth muscle.  Though we have not covered it to this point, you should, based upon what we have covered, be able to easily predict what the effects of each of the three receptors should be upon this tissue based upon the mechanism of the usual second messenger pathways.</p>\n
<p style=\"margin:1.2em 0;\">M<sub>3</sub> activation &rarr; &uarr; IP<sub>3</sub> &rarr; &uarr; Ca<sup>2+</sup> &rarr; contraction (not shown).</br>
&alpha;<sub>1</sub> activation &rarr; &uarr; IP<sub>3</sub> &rarr; &uarr; Ca<sup>2+</sup> &rarr; contraction (not shown).<br />
&beta;<sub>2</sub> activation &rarr; &uarr; cAMP &rarr; &uarr; PKA activity &rarr; &darr; MLCK activity &rarr; relaxation.</p>
<p style=\"margin:1.2em 0;\">The only receptor which, when activated, would cause dilation is the &beta;<sub>2</sub> receptor (pictured above).  When blocked it is the only one that would be expected to cause bronchoconstriction and a &darr; FEV<sub>1</sub>.</p>
<p style=\"margin:1.2em 0;\">&beta; blockers are commonly prescribed for hypertensive patients.  The decreased heart rate decreases the blood pressure.  In addition, these drugs reduce renin release and, therefore, the amount of the vasoconstrictor angiotensin II.  The bronchoconstriction is not usually a problem unless the patient has asthma.</p>
<p style=\"margin:1.2em 0;\">The nausea is the result of increased GI motility.  The patient fatigues easily because the perfusion of the skeletal muscles with blood is decreased.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//end section 5

//Begin section 6
$ProblemName = '6. Problem 2';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/HeartRateMechanisms.png";
$ProblemText = "<p style=\"margin:1.2em 0;\">Let's do another one.</p>
<p style=\"margin:1.2em 0;\">Mr. Smith visits his physician at his wife’s insistence for evaluation of two episodes of fainting.  The first occurred while working in his garden, although he felt well again after a few hours.  The second episode of fainting occurred when he arose from the table after lunch and began to walk out of the room.</p>
<p style=\"margin:1.2em 0;\">Mr. Smith admits that he has had a number of episodes of light-headedness and fatigues easily on exertion, but he does not have any chest pains.</p>
<p style=\"margin:1.2em 0;\">As part of the work-up that is ordered, Mr. Smith exercises on a treadmill.  The test was terminated after two minutes when he became light headed.  His heart rate increased from 50 beats/min at rest to 65 beats/min with exercise (a normal response would have been an increase to 90-100/min).</p>
<p style=\"margin:1.2em 0;\">In a second test, atropine (a muscarinic antagonist) was administered intravenously. Mr. Smith’s heart rate increased from 50 beats/min to only 55 beats/min (a normal response would be an increase to 90-100 min).  An EKG showed that the SA node continued to be the pacemaker for the heart.</p>
<p style=\"margin:1.2em 0;\">This is obviously an autonomic nervous system problem.  The SA node is the pacemaker of the heart.  It fires spontaneously and is innervated by both the parasympathetic and sympathetic portions of the ANS.  Without innervation, the firing rate is 100 beats per minute.  The parasympathetic system slows this down and the sympathetic speeds it up.</p>\n
<p style=\"margin:1.2em 0;\">Therefore there could be a problem with autonomic control of the SA node or there could be an aberrant property of the SA node itself.</p>
<p style=\"margin:1.2em 0;\">On a sheet of paper, diagram the sites along the autonomic pathways to the SA node. In the diagram, identify the neurotransmitter released and the receptors activated at each site.  For each site, consider what alterations from normal function could account for Mr. Smith’s responses to the two tests described above.</p>\n
<p style=\"margin:1.2em 0;\">Assuming the lesion causing the problem results in a decrease of normal function, is the problem:</p>
<p style=\"margin:1.2em 0;\">A)  in the post-synaptic sympathetic neuron or the synapse<br />
B)  in the post-synaptic parasympathetic neuron or the synapse<br />\n
C)  none of the above<br />
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'C';
$ProblemChoices = 'ABC';
$AttmeptOne = "<p><b>That's incorrect.</b></p>
<p style=\"margin:1.2em 0;\">Remember that Mr. Smith's heart rate neither increases with exercise nor with atropine.</p>";
$AttmeptOneImgSrc = "./images/HeartRateMechanisms.png";
$ExplanationImgSrc = "./images/BaroreflexDiagram.png";
$Explanation = "<p>The answer is none of the above.</p> <p style=\"margin:1.2em 0;\">A diagram of the relevant structures and neurotransmitters is above.  Note that the neurotransmitter at the ganglia on both sides, as well as at the adrenal medulla, is Ach.</p>
<p style=\"margin:1.2em 0;\">Mr. Smith‘s heart does not properly respond to autonomic inputs
 to the SA node.</p>
In the first test, exercise should have increased heart rate through decreased activity of the parasympathetic system and 
increased activity of the sympathetics.  This suggests that either (or both) parasympathetic or (and) sympathetic innervation 
is not functional.</p>
<p>In principle based upon this test alone, either 
autonomic innervation could be abnormal, the autonomic receptors within the SA node may not be functional 
(or absent), or the signaling pathways that occur upon autonomic stimulation may be defective.  It is unlikely that 
the problem is simply one of innervation: in this case, epinephrine, released by the adrenal medulla in response to exercise, 
should have increased the heart rate significantly more than it did.  (Plasma epinephrine can be measured to verify that blood 
epinephrine did, in fact, increase.)</p>\n
<p>Note that even in the absence of exercise, Mr. Smith's heart rate is low.  This strongly 
suggests that the problem 
is not a decrease in parasympathetic function alone.  Such a decrease would leave 
the remaining sympathetic tone dominant and resting heart rate would be high, not low.
<p style=\"margin:1.2em 0;\">In the second test, atropine (a muscarinic blocker) should have resulted in α greatly increased 
HR by blocking the parasympathetic pathway.  This shows in a fairly direct way that the parasympathetic control of the heart 
is not functioning correctly.</p>\n
<p style=\"margin:1.2em 0;\">However, note well that it also shows that it is unlikely that 
the problem is just a non-functioning sympathetic nervous system, such as would be caused by aberrant β-adrenergic receptors in 
the SA-node.  If this were the case, blocking the parasympathetic system with atropine should have led to a heart rate of about 
100 beats/min.  As noted previously, this is the heart rate of a non-innervated human heart.</p>
<p style=\"margin:1.2em 0;\">Similarly, if transmission between pre— and post-ganglionic fibers were functionally eliminated 
(e.g. by a problem at the ganglia, which function the same on both sides), both sympathetic and parasympathetic nervous system 
innervation of the heart would not be present and a 
resting heart rate of 100 beats/min should have been observed.</p>\n
<p style=\"margin:1.2em 0;\">Because abolishing parasympathetic innervation normally results in a high heart rate (e.g. a heart in isolation), 
which Mr. Smith does not have, he appears to have two problems: (1) his cardiac pacemaker has a lower than normal rate of spontaneous firing, and 
(2) his pacemaker does not respond properly to normal autonomic inputs.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '6. Problem 2';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/CellularMechanisms.png";
$ProblemText = "<p style=\"margin:1.2em 0;\">The figure above represents the &beta;<sub>1</sub>-adrenergic and M<sub>2</sub> muscarinic receptors in heart. Note that the channels shown from left to right are the ACh activated K<sup>+</sup> channel, the L‐type Ca<sup>2+</sup> channel, the ‘pacemaker' channel and delayed rectifier K<sup>+</sup> channels; another channel, the cAMP dependent Cl<sup>-</sup> channel (not shown), is apparently also involved.</p>
<p style=\"margin:1.2em 0;\">Based on this figure summarizing the autonomic response in the SA node and elsewhere in the heart, identify the possible molecular bases for Mr. Smith's response to atropine and to exercise. Think of strategies (i.e. clinical tests) by which you might be able to better identify the molecular sites of pathology.</p>\n
<p style=\"margin:1.2em 0;\">Which of the following represents a single site that could account for Mr. Smith’s symptoms?</p>\n
<p style=\"margin:1.2em 0;\">A)  decreased adenylate cyclase (the same as adenylyl cyclase) function</br>
B)  decreased G<sub>i</sub> function</br>
C)  decreased &beta;<sub>1</sub> receptor function</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'A';
$ProblemChoices = 'ABC';
$AttmeptOne = "<p><b>Sorry.  That's incorrect.</b></p>
<p style=\"margin:1.2em 0;\">Remember that if the receptors of the heart themselves and the individual downstream consequences operated properly, application of atropine should have caused a substantial increase in heart rate.</p>";
$AttmeptOneImgSrc = "./images/CellularMechanisms.png";
$ExplanationImgSrc = "./images/CellularMechanisms.png";
$Explanation = "<p style=\"margin:1.2em 0;\">The first thing to realize is that Mr. Smith has bradycardia.  That eliminates G<sub>i</sub>, the G protein of the M<sub>2</sub> receptor.  If G<sub>i</sub> were non-functional, the heart rate would be higher not lower.</p>
<p style=\"margin:1.2em 0;\">Consider the response to atropine.  If the &beta;<sub>1</sub> receptor were non-funcitonal and the M<sub>2</sub> receptor was made nonfunctional by atropine, the heart rate would rise to the level of the non-innervated heart, about 100 beats per minute.  This clearly didn't happen.</p>
<p style=\"margin:1.2em 0;\">That leaves adenylate cyclase as a downstream option that fits the data.</p>\n
<p style=\"margin:1.2em 0;\">One particularly interesting thought is that a permanently open K<sup>+</sup> channel, normally opened by ACh, might account for Mr. Smith ‘s response to atropine and exercise.  If this were the case, it would appear as if the parasympathetic stimulation to the heart was more than normal: stimulation would not affect the K<sup>+</sup> channel but would affect intracellular levels of cAMP.</p>
<p style=\"margin:1.2em 0;\">Another possibility that might account for Mr. Smith’s tests is, as indicated above, that cAMP levels are chronically low.  This could be due to a defective adenylate cyclase.</p>
<p style=\"margin:1.2em 0;\">There are a multitude of tests that can be envisioned to identify the site or sites that cause the defects.  Unfortunately, none may be conclusive at the molecular level.  Some examples:</p>
<ol style=\"margin-left:1em;padding-left:0.5em;text-indent:0;\">
  <li>There are adenosine A1-receptors in heart.  Their activation leads to the same consequences as does activation of muscarinic M<sub>2</sub> receptors (you are not responsible for knowing this at this time).  Therefore adenosine could be useful in testing the pathways involved.  (In fact, adenosine is an anti-arrhythmic drug used clinically to slow heart rate.  Its half-life is short, only about 10 sec, minimizing side effects.)</li>
  <li style=\"margin:1em 0 1em 0;\">
    <p style=\"margin:1.2em 0;\">Stimulation of the sympathetic nervous system normally increases heart rate through β<sub>1</sub> receptors.  The normal sympathetic response could be mimicked by using a phosphodiesterase inhibitor to increase intracellular cAMP.</p>
    <p style=\"margin:1.2em 0;\">Amrinone and milrinone are the two commonest phosphodiesterase inhibitors used to promote a positive inotropic effect.  If these drugs caused a faster heart rate, the problem would be upstream (prior to) production of cAMP.  However, if the K<sup>+</sup> channel were permanently open, rises in cAMP would probably not be sufficient to overcome the suppression of cardiac function caused by the defective channel.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//end section 6


?>
