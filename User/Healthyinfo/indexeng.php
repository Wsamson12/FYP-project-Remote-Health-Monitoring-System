<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="ChatBot.css">
    <title>Disease Information Website</title>
    <script src="index.js" type="module"></script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800&family=Roboto:wght@100;300;400&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Outfit', sans-serif;
        }

        .header-text {
            color: white;
        }

        .username {
            color: white; /* Replace with your desired text color */
        }



        /*nav */
        nav {
            display: flex;
            justify-content: space-between;
            max-width: 80%;
            margin: auto;
            padding: 1.4rem 1rem;
            background-color: #000000b5;
            backdrop-filter: blur(10px);
            border-radius: 3rem;
            margin-top: 1rem;
            /* box-shadow: 0px 0px 3px rgb(254 116 62); */
        }

        .logo {
            font-size: 1.3rem;
            font-weight: 600;
        }

        .logo a {
            color: #fff;
            text-decoration: none;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            padding: 0;
            background-color: transparent;
            overflow: hidden;
            margin-bottom: 0;
        }

        li {
            padding: 0rem 1.1rem;
            float: left;
        }

        li a {
            color: #e96d3f;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: .7px;
        }

        ul li a {
            position: relative;
        }

        ul li a::before {
            content: "";
            position: absolute;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background-color: #fff;
        }

        /* Center Animation */
        ul li a::before {
            transform: scale(0, 1);
            transition: transform .3s ease;
        }

        ul li a:hover::before {
            transform: scale(1, 1);
        }
        li a.active,
        li a:hover {
            color: #fff;
            transition: all .3s ease-in-out
        }

        #click {
            display: none;
        }

        .menu {
            display: none;
        }

        @media only screen and (max-width:1024px) {
            nav {
                max-width: 98%;
            }
        }

        @media only screen and (max-width:768px) {
            html {
                font-size: 80%;
            }

            nav {
                max-width: 100%;
            }
        }

        @media only screen and (max-width:480px) {
            html {
                font-size: 85%;
            }

            header {
                height: 100vh;
            }

            li {
                padding: 1rem 1.1rem;
            }

            .menu {
                display: block;
                font-size: 2rem;
                font-weight: bold;
                color: #fff;
            }

            ul {
                width: 100%;
                height: 100vh;
                position: absolute;
                display: flex;
                flex-direction: column;
                text-align: center;
                top: 4rem;
                left: -100%;
                background-color: #000000b5;
                backdrop-filter: blur(10px);
            }

            #click:checked~ul {
                left: 0%;
                transition: all 0.3s ease;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

        }</style>

</head>
<?php include ('navbar.php'); ?>
<body>
<br><br><br><br><br>
<div class="navbar1">
    <a href="indexeng.php">home page</a>
    <div class="dropdown">
        <a href="disease.html" class="dropbtn">Disease Database</a>
        <div class="dropdown-content">
            <!-- Neurological Diseases -->
            <div class="dropdown-header">Neurological Diseases</div>
            <a id="polioBtn" href="javascript:void(0);">Polio</a>
            <a id="parkinsonsDiseaseBtn" href="javascript:void(0);">Parkinson's Disease</a>
            <!-- Endocrine Diseases -->
            <div class="dropdown-header">Endocrine Diseases</div>
            <a id="diabetesBtn" href="javascript:void(0);">Diabetes</a>
            <!-- Cardiovascular Diseases -->
            <div class="dropdown-header">Cardiovascular Diseases</div>
            <a id="heartDiseaseBtn" href="javascript:void(0);">Heart Disease</a>
            <!-- Mental and Psychological Diseases -->
            <div class="dropdown-header">Mental and Psychological Diseases</div>
            <a id="depressionBtn" href="javascript:void(0);">Depression</a>
            <a id="mentalIllnessBtn" href="javascript:void(0);">Mental Illness</a>
            <a id="anorexiaBtn" href="javascript:void(0);">Anorexia</a>
            <!-- Respiratory Diseases -->
            <div class="dropdown-header">Respiratory Diseases</div>
            <a id="asthmaBtn" href="javascript:void(0);">Asthma</a>
            <a id="atypicalPneumoniaBtn" href="javascript:void(0);">Atypical Pneumonia</a>
            <!-- Infectious Diseases -->
            <div class="dropdown-header">Infectious Diseases</div>
            <a id="rabiesBtn" href="javascript:void(0);">Rabies</a>
            <a id="gastroenteritisBtn" href="javascript:void(0);">Gastroenteritis</a>
            <!-- Ophthalmic Diseases -->
            <div class="dropdown-header">Ophthalmic Diseases</div>
            <a id="nightBlindnessBtn" href="javascript:void(0);">Night Blindness</a>
            <!-- Allergies -->
            <div class="dropdown-header">Allergies</div>
            <a id="allergicRhinitisBtn" href="javascript:void(0);">Allergic Rhinitis</a>
        </div>
    </div>
    <a href="index.php">中</a>
    <div class="search-container">
        <form action="/search" method="get">
            <input type="text" placeholder="Enter disease..." name="search">
            <button type="submit">search</button>
        </form>
    </div>
</div>

<div class="main" id="mainContent">
    <h1>Welcome to the Disease Information website</h1>
    <p>Here is some information about the disease...</p>

    <!-- 更多内容 -->
</div>
<button class="chatbot-toggler">
    <span class="material-symbols-rounded">mode_comment</span>
    <span class="material-symbols-outlined">close</span>
</button>
<div class="chatbot">
    <header>
        <h2>Chatbot</h2>
        <span class="close-btn material-symbols-outlined">close</span>
    </header>
    <ul class="chatbox">
        <li class="chat incoming">
            <span class="material-symbols-outlined">smart_toy</span>
            <p>Hi there 👋<br>How can I help you today?</p>
        </li>
    </ul>
    <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
    </div>
</div>

<div id="heartDiseaseContent" class="searchable" style="display: none;">
    <h1>Overview of heart disease</h1>
    <p>Heart disease is one of the leading causes of death worldwide and includes a variety of diseases that affect heart function. These disorders may involve other structures of the heart, such as the coronary arteries, heart muscle, valves, or conduction system.</p>
    <br>
    <h2>Types of heart disease</h2>
    <p>There are many types of heart disease, including but not limited to the following:</p>
    <ul>
        <li><strong>Coronary Heart Disease（CAD）</strong>:The main blood vessels in the heart are damaged, which can lead to a heart attack.</li>
        <li><strong>myocardial infarction</strong>: Commonly known as a heart attack, it occurs when blood flow to the heart muscle is blocked.</li>
        <li><strong>heart failure</strong>: The heart is unable to pump blood effectively to meet the body's needs.</li>
        <li><strong>arrhythmia</strong>: The heart beats fast, slow, or irregularly.</li>
        <li><strong>Heart valve disease</strong>: Involves abnormal opening and closing of heart valves.</li>
        <li><strong>Congenital heart disease</strong>：Structural problems with the heart that are present at birth.</li>
        <li><strong>cardiomyopathy</strong>：Diseases that affect the heart muscle, which may cause the heart to become enlarged or hardened.</li>
        <li><strong>pericarditis</strong>：Inflammation of the pericardium.</li>
    </ul>
    <br>
    <h2>Symptoms of Heart Disease</h2>
    <p>The symptoms of heart disease vary from person to person. Some may not even know they have heart disease, while others may experience one or more of the following symptoms:</p>
    <ul>
        <li>Chest pain or discomfort</li>
        <li>Difficulty breathing</li>
        <li>Palpitations</li>
        <li>Weakness or dizziness</li>
        <li>Fatigue</li>
        <li>Swelling of the ankles, legs, or abdomen</li>
    </ul>
    <br>
    <h2>Prevention and Treatment</h2>
    <p>The prevention and treatment of heart disease involve lifestyle changes, medication, and possibly surgical treatment. Here are some preventive measures:</p>
    <ul>
        <li>Healthy diet: Eat plenty of fruits, vegetables, and whole grains.</li>
        <li>Regular exercise: At least 150 minutes of moderate-intensity exercise per week.</li>
        <li>Maintain a healthy weight: Reducing weight can lessen the burden on the heart.</li>
        <li>Quit smoking: Smoking is a major risk factor for heart disease.</li>
        <li>Stress management: Learn relaxation techniques such as deep breathing, meditation, or yoga.</li>
        <li>Regular check-ups: Regularly check blood pressure, cholesterol, and diabetes.</li>
    </ul>
    <br>
    <p>For patients diagnosed with heart disease, the doctor may recommend medication treatment, such as antihypertensives, anticoagulants, cholesterol-lowering drugs, or other drugs to help control the symptoms of heart disease. In some cases, surgical treatments such as coronary artery bypass surgery, heart valve surgery, or the installation of a pacemaker may be needed to treat heart disease.</p>
    <br>
    <h2>Risk Factors for Heart Disease</h2>
    <p>Many factors may increase the risk of heart disease, including:</p>
    <ul>
        <li>Age: The risk of heart disease increases with age.</li>
        <li>Gender: Men are at greater risk for heart disease at an earlier age than women.</li>
        <li>Family history: The risk is higher if there is a history of heart disease in the family.</li>
        <li>Smoking: Smoking significantly increases the risk of heart disease.</li>
        <li>Poor diet: A diet high in fat, sodium, and sugar can increase the risk of heart disease.</li>
        <li>High blood pressure and high cholesterol: These conditions can cause vascular damage and increase the risk of heart disease.</li>
        <li>Overweight or obesity: Increases the burden on the heart and can lead to other risk factors.</li>
        <li>Diabetes: People with diabetes are at higher risk for heart disease.</li>
        <li>Lack of exercise: A sedentarylifestyle can increase the risk of heart disease.</li>
        <li>Excessive alcohol consumption: Long-term excessive drinking can cause heart problems.</li>
    </ul>
    <br>
    <h2>Diagnosis of Heart Disease</h2>
    <p>Diagnosing heart disease typically involves a series of tests, including:</p>
    <ul>
        <li>Electrocardiogram (ECG): To check the heart's electrical activity.</li>
        <li>Echocardiogram: Using ultrasound to examine the structure and function of the heart.</li>
        <li>Exercise stress test: To observe the heart's performance during exercise.</li>
        <li>Cardiac catheterization: To examine blockages in the coronary arteries.</li>
        <li>Chest X-ray: To assess the condition of the heart, lungs, and large blood vessels in the chest.</li>
        <li>Blood tests: To check for biomarkers associated with heart disease.</li>
    </ul>
    <br>
    <h2>Conclusion</h2>
    <p>Heart disease is a serious health issue, but with healthy lifestyle choices, regular medical check-ups, and proper management, many heart diseases can be prevented and treated. If you have risk factors for heart disease, consult with a doctor to receive advice and treatment plans tailored to your personal health condition. If you have any symptoms or a family history of diabetes, please consult a doctor.</p>
</div>

<div id="diabetesContent" class="searchable" style="display: none;">
    <h1>Overview of Diabetes</h1>
    <p>Diabetes is a chronic disease characterized by high levels of sugar in the blood. Blood sugar is the main source of energy and comes from sugar in the food we eat. Insulin is a hormone produced by the pancreas that helps sugar enter cells in the body for use. When you have diabetes, your body either can't produce insulin effectively or can't properly use the insulin it makes.</p>

    <h2>Types of Diabetes</h2>
    <p>There are mainly three types of diabetes:</p>
    <ul>
        <li><strong>Type 1 Diabetes</strong>: Usually diagnosed in children and young adults, where the body does not produce insulin.</li>
        <li><strong>Type 2 Diabetes</strong>: Related to weight and physical activity, the body does not use insulin properly.</li>
        <li><strong>Gestational Diabetes</strong>: Some women develop high blood sugar during pregnancy.</li>
    </ul>

    <h2>Symptoms of Diabetes</h2>
    <p>Common symptoms of diabetes include:</p>
    <ul>
        <li>Feeling thirsty frequently</li>
        <li>Urinating often</li>
        <li>Extreme hunger</li>
        <li>Unexplained weight loss</li>
        <li>Extreme fatigue</li>
        <li>Slow healing of wounds</li>
    </ul>

    <h2>Prevention and Treatment</h2>
    <p>While Type 1 diabetes cannot be prevented, Type 2 diabetes can often be prevented or delayed through a healthy diet and regular physical activity. Treatment includes medication and insulin therapy, as well as blood sugar monitoring.</p>

    <h2>Conclusion</h2>
    <p>Diabetes is a global health issue, but with proper management and treatment, patients can live a healthy life. If you have any symptoms or a family history of diabetes, please consult a doctor.</p>
</div>

<div id="depressionContent" class="searchable" style="display: none;">
    <h1>Overview of Depression</h1>
    <p>Depression, also known as Major Depressive Disorder, is a common and serious medical illness that significantly affects how a person feels, thinks, and acts. Fortunately, it is also treatable. Depression can lead to emotional and physical problems that can affect a person's work and daily life.</p>
    <br>

    <h2>Symptoms of Depression</h2>
    <p>The symptoms of depression can range from mild to severe and may include:</p>
    <ul>
        <li>Persistent sadness, anxiety, or feeling of emptiness</li>
        <li>Feelings of hopelessness, helplessness, worthlessness, or powerlessness</li>
        <li>Loss of interest or pleasure in activities once enjoyed, including sex</li>
        <li>Decreased energy or increased fatigue</li>
        <li>Difficulty concentrating, remembering things, or making decisions</li>
        <li>Sleep disturbances, such as insomnia or oversleeping</li>
        <li>Changes in appetite, possibly accompanied by weight loss or gain</li>
        <li>Restlessness or slowed behavior (observable by others)</li>
        <li>Thoughts, speech, or attempts of suicide or plans</li>
        <li>Persistent physical symptoms such as headaches, digestive disorders, or chronic pain</li>
    </ul>
    <br>

    <h2>Causes of Depression</h2>
    <p>The exact causes of depression are not entirely clear, but it seems to involve multiple factors, including:</p>
    <ul>
        <li>Genetics: People with a family history of depression are at a higher risk.</li>
        <li>Biochemistry: Imbalances of chemicals in the brain may be involved in the development of depression.</li>
        <li>Environment: Ongoing stress, trauma, or negative life events may trigger depression.</li>
        <li>Psychological factors: Certain personality traits, thinking patterns, or ways of handling emotions may make some people more susceptible to depression.</li>
    </ul>
    <br>

    <h2>Treatment of Depression</h2>
    <p>While Type 1 diabetes cannot be prevented, Type 2 diabetes can often be prevented or delayed through a healthy diet and regular physical activity. Treatments include medication and insulin therapy, as well as blood sugar monitoring.</p>
    <ul>
        <li>Medication treatment: Often includes antidepressants, which can adjust the chemicals in the brain that affect mood and stress responses.</li>
        <li>Psychotherapy: Such as Cognitive Behavioral Therapy (CBT) and interpersonal therapy, which help change negative thought patterns and improve coping skills.</li>
        <li>Lifestyle and family support: Good living habits and support from family and friends are also important for recovery.</li>
    </ul>
    <br>

    <h2>Prevention of Depression</h2>
    <p>Although depression cannot be completely prevented, the following strategies may be helpful:</p>
    <ul>
        <li>Maintain positive interpersonal relationships and regularly participate in social activities.</li>
        <li>Ensure adequate sleep and nutrition.</li>
        <li>Develop strategies for coping with stress.</li>
        <li>Seek professional help when psychological stress or emotional disturbances occur.</li>
    </ul>
    <br>

    <h2>Conclusion</h2>
    <p>Depression is a serious but treatable illness that requires early identification and treatment. If you or someone you know is showing symptoms of depression, it is crucial to seek help from a professional healthcare provider. Timely intervention can significantly improve the quality of life.</p>
</div>

<div id="asthmaContent" class="searchable" style="display: none;">
    <h1>Overview of Asthma</h1>
    <p>Asthma is a common chronic respiratory disease that affects the airways, causing them to become narrow and swollen, and may produce extra mucus. This can lead to difficulty breathing, coughing, wheezing, and chest tightness.</p>
    <br>
    <h2>Types of Asthma</h2>
    <p>The types of asthma vary based on the severity of symptoms and triggering factors, including:</p>
    <ul>
        <li><strong>Allergic Asthma</strong>: Triggered by airborne allergens such as pollen, dust mites, or pet dander.</li>
        <li><strong>Exercise-Induced Asthma</strong>: Symptoms are aggravated during physical activity.</li>
        <li><strong>Occupational Asthma</strong>: Caused by chemical substances or dust in the workplace.</li>
        <li><strong>Nocturnal Asthma</strong>: Symptoms worsen at night during sleep.</li>
        <li><strong>Cough-Variant Asthma</strong>: The main symptom is a persistent dry cough.</li>
    </ul>
    <br>
    <h2>Symptoms of Asthma</h2>
    <p>The severity of asthma symptoms can vary among individuals and in the same person at different times. Common symptoms include:</p>
    <ul>
        <li>Wheezing, especially when exhaling</li>
        <li>Chest tightness or pain</li>
        <li>Persistent coughing</li>
        <li>Difficulty breathing or shortness of breath</li>
        <li>Difficulty sleeping due to breathing problems</li>
    </ul>
    <br>
    <h2>Prevention and Treatment</h2>
    <p>Treatment of asthma typically requires a comprehensive approach, including avoiding triggers, using medication, and emergency treatment when necessary. Here are some methods to prevent and manage asthma:</p>
    <ul>
        <li>Understand and avoid personal asthma triggers.</li>
        <li>Use inhaled corticosteroids to reduce inflammation in the airways.</li>
        <li>Use quick-relief inhalers during an asthma attack.</li>
        <li>Regularly monitor respiratory function.</li>
        <li>Develop an asthma action plan and manage it according to the plan.</li>
    </ul>
    <br>
    <p>For many people with asthma, with proper treatment and management, they can live normal lives and participate in all activities.</p>
    <br>
    <h2>Risk Factors for Asthma</h2>
    <p>Asthma can be caused by multiple factors, risk factors include:</p>
    <ul>
        <li>Family history: Asthma is more common in certain families.</li>
        <li>Allergies: People with a history of allergies are more likely to develop asthma.</li>
        <li>Environmental factors: Air pollution, smoke, chemicals, etc. may increase the risk of asthma.</li>
        <li>Occupation: Jobs that involve certain chemicals or dust can increase the risk of asthma.</li>
        <li>Smoking: Tobacco smoke is a common trigger for asthma attacks.</li>
        <li>Obesity: Obesity is associated with an increased risk of asthma.</li>
        <li>Respiratory infections: Severe respiratory infections during childhood may increase the risk of asthma.</li>
    </ul>
    <br>
    <h2>Diagnosis of Asthma</h2>
    <p>Diagnosing asthma may involve the following tests:</p>
    <ul>
        <li>Pulmonary function tests: Measure airflow and lung capacity.</li>
        <li>Peak flow measurement: Measures the maximum speed of exhaled air.</li>
        <li>Allergy testing: Identifies potential allergens.</li>
        <li>Asthma control tests: Evaluate the impact of asthma symptoms on daily life.</li>
    </ul>
    <br>
    <h2>Conclusion</h2>
    <p>Asthma is a chronic condition that can be effectively managed with medication, environmental control, and lifestyle adjustments. If you suspect that you or your family member has asthma, seek professional medical help to receive proper diagnosis and treatment.</p>
</div>

<div id="rabiesContent" class="searchable" style="display: none;">
    <h1>Overview of Rabies</h1>
    <p>Rabies is an acute viral encephalitis caused by the rabies virus, affecting mammals worldwide, including humans. The disease is primarily transmitted through bites from infected animals, with dogs being the most common source. Once symptoms appear, rabies is almost always fatal.</p>
    <br>
    <h2>Transmission of Rabies</h2>
    <p>Rabies is typically transmitted through:</p>
    <ul>
        <li>Bites from infected animals (usually dogs, foxes, raccoons, and bats).</li>
        <li>Contact of infected animal saliva with open wounds or mucous membranes (such as the eyes, nose, or mouth).</li>
    </ul>
    <br>
    <h2>Symptoms of Rabies</h2>
    <p>The symptoms of rabies occur in two stages:</p>
    <ul>
        <li>Prodromal symptoms: Include fever, headache, discomfort, anxiety, difficulty sleeping, and pain or discomfort at the bite site.</li>
        <li>Progressive stage symptoms: Neurological damage causing seizures, agitation, behavioral changes, hydrophobia (fear of water), and difficulty swallowing.</li>
    </ul>
    <br>
    <h2>Prevention and Treatment</h2>
    <p>Prevention measures for rabies are crucial, as the disease is almost incurable once symptoms appear. Preventative measures include:</p>
    <ul>
        <li>Rabies vaccination: For high-risk groups such as veterinarians, animal control and protection workers, and travelers, vaccination is recommended.</li>
        <li>Avoid contact with wild animals and unfamiliar domestic animals.</li>
        <li>Pet vaccination: Regular vaccination of pets against rabies.</li>
        <li>If bitten or scratched by an animal, immediately wash the wound with soap and water and seek medical help.</li>
    </ul>
    <br>
    <h2>Conclusion</h2>
    <p>If you believe you may have been exposed to the rabies virus, seek medical help immediately. Post-exposure prophylaxis (PEP) consists of a series of vaccine injections that can prevent the virus from developing into rabies.</p>
</div>

<div id="mentalIllnessContent" class="searchable" style="display: none;">
    <h1>Overview of Mental Illness</h1>
    <p>Mental illness encompasses a group of psychological health conditions that affect thinking, emotion, and behavior. These conditions can impact an individual's ability to work, interpersonal relationships, and various aspects of daily life.</p>
    <br>
    <h2>Types of Mental Illness</h2>
    <p>There are many types of mental illnesses, including:</p>
    <ul>
        <li><strong>Mood Disorders</strong>: Such as depression and bipolar disorder.</li>
        <li><strong>Anxiety Disorders</strong>: Including generalized anxiety disorder, social anxiety disorder, and panic disorder.</li>
        <li><strong>Schizophrenia</strong>: Involving distorted thinking and perception.</li>
        <li><strong>Personality Disorders</strong>: Such as borderline personality disorder and antisocial personality disorder.</li>
        <li><strong>Post-Traumatic Stress Disorder (PTSD)</strong>: Occurring after a traumatic event.</li>
        <li><strong>Obsessive-Compulsive Disorder</strong>: Involving obsessive thoughts and behaviors.</li>
        <li><strong>Eating Disorders</strong>: Such as anorexia nervosa and bulimia nervosa.</li>
        <li><strong>Addiction Disorders</strong>: Including drug abuse and alcohol dependence.</li>
    </ul>
    <br>
    <h2>Symptoms of Mental Illness</h2>
    <p>The symptoms of mental illness are wide-ranging and diverse, including:</p>
    <ul>
        <li>Extreme mood swings</li>
        <li>Changes in thinking or perception</li>
        <li>Delusions or hallucinations</li>
        <li>Social withdrawal or isolation</li>
        <li>Excessive or inappropriate worry or fear</li>
        <li>Sleep disturbances</li>
        <li>Lack of energy or fatigue</li>
        <li>Loss of interest in daily activities and hobbies</li>
    </ul>
    <br>
    <h2>Prevention and Treatment</h2>
    <p>Prevention and treatment of mental illness may involve a variety of strategies:</p>
    <ul>
        <li>Psychotherapy, including individual or group counseling.</li>
        <li>Medication treatment, using antidepressants, antipsychotic drugs, etc.</li>
        <li>Lifestyle changes, including a healthy diet, regular exercise, and good sleep habits.</li>
        <li>Social and community support, including self-help groups and support networks.</li>
    </ul>
    <br>
    <p>Research into mental illness is an ever-evolving field, with scientists exploring new treatment methods and a deeper understanding of the brain-behavior relationship. This includes genetic research, the development of new medications, and studies of brain activity patterns.</p>
    <p>In summary, mental illnesses are complex conditions that require personalized treatment and a comprehensive support system. Both individuals and society should strive to raise awareness about mental illness, eliminate stigma, and provide the necessary resources to support those affected and their families.</p>
</div>

<div id="gastroenteritisContent" class="searchable" style="display: none;">
    <h1>Overview of Gastroenteritis</h1>
    <p>Gastroenteritis refers to inflammation of the stomach and small intestine, usually due to viral or bacterial infections. Commonly known as "stomach flu," it is unrelated to the influenza virus. Gastroenteritis can cause symptoms such as diarrhea, vomiting, stomach pain, and fever, which may lead to dehydration.</p>
    <br>
    <h2>Types of Gastroenteritis</h2>
    <p>The types of gastroenteritis are usually based on the pathogen, including:</p>
    <ul>
        <li><strong>Viruses</strong>: The most common causes are norovirus and rotavirus.</li>
        <li><strong>Bacteria</strong>: It may be caused by food poisoning, such as infections from Salmonella or Escherichia coli.</li>
        <li><strong>Parasites</strong>: Caused by parasites such as Giardia lamblia.</li>
    </ul>
    <br>
    <h2>Symptoms of Gastroenteritis</h2>
    <p>Common symptoms of gastroenteritis may include:</p>
    <ul>
        <li>Watery diarrhea</li>
        <li>Vomiting</li>
        <li>Abdominal pain and cramps</li>
        <li>Low-grade fever or fever</li>
        <li>Headaches and muscle aches</li>
        <li>Loss of appetite</li>
    </ul>
    <br>
    <h2>Prevention and Treatment</h2>
    <p>Treatment for gastroenteritis is primarily symptomatic, especially maintaining hydration and electrolyte balance. Here are some preventive measures and treatment methods:</p>
    <ul>
        <li>Maintain good hygiene: Frequent hand washing is key to preventing viral and bacterial infections.</li>
        <li>Diet management: Avoid solid foods at the onset of infection, instead consume broths or electrolyte drinks.</li>
        <li>Medication: In some cases, antiemetic or antidiarrheal drugs may be necessary.</li>
        <li>Consume easily digestible foods in moderation: Such as bananas, rice, applesauce, and toast.</li>
        <li>In cases of severe dehydration, intravenous fluids and electrolytes may be required.</li>
    </ul>
    <br>
    <p>For bacterial gastroenteritis, doctors may prescribe antibiotics based on the type of pathogen. If symptoms are severe or persistent, seek medical attention promptly.</p>
</div>

<div id="polioContent" class="searchable" style="display: none;">
    <h1>Overview of Poliomyelitis</h1>
    <p>Poliomyelitis, also known as polio or infantile paralysis, is a contagious disease caused by the poliovirus. It primarily affects children under the age of 5 and can lead to varying degrees of paralysis.</p>
    <br>
    <h2>Types of Poliomyelitis</h2>
    <p>There are three main types of poliomyelitis:</p>
    <ul>
        <li><strong>Spinal poliomyelitis</strong>: Affects the spinal cord and can lead to limb paralysis.</li>
        <li><strong>Bulbar poliomyelitis</strong>: Affects muscles involved in breathing and swallowing.</li>
        <li><strong>Non-paralytic poliomyelitis</strong>: The virus causes infection without leading to paralysis.</li>
    </ul>
    <br>
    <h2>Symptoms of Poliomyelitis</h2>
    <p>The symptoms of poliomyelitis may include:</p>
    <ul>
        <li>Fever</li>
        <li>Fatigue</li>
        <li>Headache</li>
        <li>Vomiting</li>
        <li>Neck stiffness and pain</li>
        <li>Weakness in the limbs</li>
    </ul>
    <br>
    <h2>Prevention and Treatment</h2>
    <p>The prevention of poliomyelitis mainly relies on vaccination. There is no cure for poliomyelitis, and treatment is primarily symptomatic, including physical therapy and supportive care.</p>
    <br>
    <h2>Risk Factors for Poliomyelitis</h2>
    <p>Risk factors for developing poliomyelitis include:</p>
    <ul>
        <li>Not being vaccinated</li>
        <li>Living in an area where the virus is endemic</li>
        <li>Having a weakened immune system</li>
    </ul>
    <br>
    <h2>Diagnosis of Poliomyelitis</h2>
    <p>The diagnosis of poliomyelitis is usually based on clinical symptoms and laboratory testing, such as virus culture and PCR testing.</p>
    <br>
    <h2>Conclusion</h2>
    <p>Poliomyelitis is a preventable disease, and vaccination is the most effective method of prevention. For those infected, timely supportive treatment can improve some symptoms.</p>
</div>

<div id="parkinsonsDiseaseContent" class="searchable" style="display: none;">
    <h1>Parkinson's Disease Overview</h1>
    <p>Parkinson's disease (PD) is a chronic and progressive movement disorder, meaning that symptoms continue and worsen over time. Nearly one million people in the US are living with Parkinson's disease. The cause is unknown, and although there is presently no cure, there are treatment options such as medication and surgery to manage its symptoms.</p>

    <h2>Symptoms</h2>
    <p>The symptoms of Parkinson's disease vary from person to person and include:</p>
    <ul>
        <li>Tremor of the hands, arms, legs, jaw and face</li>
        <li>Bradykinesia or slowness of movement</li>
        <li>Rigidity or stiffness of the limbs and trunk</li>
        <li>Postural instability or impaired balance and coordination</li>
    </ul>

    <h2>Causes</h2>
    <p>Although the cause of Parkinson's disease is unknown, factors that appear to play a role include:</p>
    <ul>
        <li>Genetics</li>
        <li>Environmental triggers</li>
        <li>Presence of Lewy bodies</li>
        <li>Age</li>
    </ul>

    <h2>Treatment</h2>
    <p>There are various treatment options for Parkinson's disease, including:</p>
    <ul>
        <li>Medications like Levodopa and dopamine agonists</li>
        <li>Surgical procedures like Deep Brain Stimulation (DBS)</li>
        <li>Lifestyle changes, like getting more rest and exercise</li>
    </ul>

    <h2>Living with Parkinson's Disease</h2>
    <p>Living with Parkinson's disease can be challenging, but many people lead full, active lives with the disease. A multidisciplinary approach to treatment, including physical and occupational therapy, speech therapy, and nutritional counseling, can help manage the symptoms and improve quality of life.</p>
</div>

<div id="anorexiaContent" class="searchable" style="display: none;"> <h1>Overview of Anorexia Nervosa</h1> <p>Anorexia nervosa is a severe mental disorder that affects eating behaviors and body image. Individuals with anorexia nervosa have an abnormal fear and concern about weight and body image and attempt to control their weight through food restriction. This condition not only impacts physical health but can also lead to psychological and social problems.</p> <br> <h2>Types of Anorexia Nervosa</h2> <p>There are two main types of anorexia nervosa:</p> <ul> <li><strong>Restricting type</strong>: Individuals restrict their food intake to lose weight, often by severely limiting their food intake and obsessively counting calories.</li> <li><strong>Binge-eating/purging type</strong>: In addition to food restriction, individuals engage in behaviors such as self-induced vomiting, laxative use, or excessive exercise to control their weight.</li> </ul> <br> <h2>Symptoms of Anorexia Nervosa</h2> <p>Symptoms and signs of anorexia nervosa may include:</p> <ul> <li>Significantly low body weight below the normal range</li> <li>Excessive concern and preoccupation with weight and body image</li> <li>Refusal to eat or extremely limited food intake</li> <li>Excessive restriction of certain food categories</li> <li>Obsessive counting of food calories</li> <li>Distorted perception of one's own body shape and weight</li> <li>Bizarre behaviors related to food, such as cutting food into small pieces or avoiding specific food categories</li> <li>Decreased physical strength and energy</li> <li>Anxiety and depressive emotions</li> <li>Social withdrawal and isolation</li> </ul> <br> <h2>Prevention and Treatment of Anorexia Nervosa</h2> <p>Prevention and treatment of anorexia nervosa involve a comprehensive approach, including:</p> <ul> <li>Psychotherapy: Techniques such as cognitive-behavioral therapy, family therapy, and supportive psychotherapy can be beneficial.</li> <li>Nutritional counseling: Providing healthy dietary guidance to help individuals establish normal eating habits.</li> <li>Medical monitoring: Regular examinations to assess physical conditions, including weight, height, cardiovascular function, etc.</li> <li>Medication: In certain cases, medication may be used to treat symptoms related to anorexia nervosa, such as anxiety and depression.</li> <li>Establishing a support system: Providing support for the individual and their family to help them cope with the challenges of anorexia nervosa.</li> </ul> <br> <h2>Risk Factors for Anorexia Nervosa</h2> <p>Several factors may increase the risk of developing anorexia nervosa, including:</p> <ul> <li>Genetics: Having a family history of eating disorders or mental health conditions</li> <li>Psychological factors: Perfectionism, low self-esteem, and body dissatisfaction</li> <li>Social and cultural influences: Societal emphasis on thinness and beauty standards</li> <li>Life transitions: Stressful life events, such as puberty or starting college</li> <li>Family factors: Dysfunction within the family or strained relationships</li> </ul> <br> <h2>Diagnosis of Anorexia Nervosa</h2> <p>Diagnosing anorexia nervosa typically involves a combination of physical and psychological evaluations, including:</p> <ul> <li>Medical assessment: Evaluating physical signs, symptoms, and body weight</li> <li>Psychological evaluation: Assessing attitudes, behaviors, and emotions related to food, weight, and body image</li> <li>Diagnostic criteria: Meeting the criteria outlined in the Diagnostic and Statistical Manual of Mental Disorders (DSM-5)</li> </ul> <br> <h2>Conclusion</h2> <p>Anorexia nervosa is a serious mental health condition, but with early intervention, appropriate treatment, and a strong support system, recovery is possible. If you or someone you know is struggling with anorexia nervosa, it is important to seek professional help from healthcare providers specializing in eating disorders. Remember, recovery is a journey, and support and understanding play a crucial role in the healing process.</p></div>

<div id="allergicRhinitisContent" class="searchable" style="display: none;"> <h1>Allergic Rhinitis Overview</h1> <p>Allergic rhinitis is a common allergic condition characterized by inflammation and allergic reactions of the nasal mucosa. When allergens such as pollen, dust mites, or pet dander enter the nasal cavity, the immune system releases chemicals that cause inflammation and allergic symptoms in the nasal tissues.</p> <br> <h2>Types of Allergic Rhinitis</h2> <p>Allergic rhinitis can be classified into the following types based on the cause and timing of symptoms:</p> <ul> <li><strong>Seasonal Allergic Rhinitis</strong>: Usually associated with seasonal pollen dispersal, such as tree pollen allergy in spring.</li> <li><strong>Perennial Allergic Rhinitis</strong>: Associated with ongoing exposure to allergens like dust mites or pet dander, and can occur year-round.</li> </ul> <br> <h2>Symptoms of Allergic Rhinitis</h2> <p>Common symptoms of allergic rhinitis include:</p> <ul> <li>Frequent sneezing</li> <li>Nasal congestion and runny nose</li> <li>Nasal itching and inflammation</li> <li>Throat discomfort and coughing</li> <li>Itchy, red, and watery eyes</li> <li>Headache and facial pressure</li> <li>Sleep problems and fatigue</li> </ul> <br> <h2>Prevention and Treatment of Allergic Rhinitis</h2> <p>Methods for preventing and treating allergic rhinitis include:</p> <ul> <li>Avoiding allergen exposure: Try to avoid contact with substances that trigger your allergies, such as pollen, dust mites, or pet dander.</li> <li>Indoor air purifiers: Using air purifiers can help reduce the concentration of allergens indoors.</li> <li>Allergy medications: Your doctor may recommend antihistamines, corticosteroid nasal sprays, or other allergy medications to alleviate symptoms.</li> <li>Immunotherapy: For severe allergic rhinitis, your doctor may recommend immunotherapy to enhance your immune system's tolerance to allergens.</li> </ul></div>

<div id="atypicalPneumoniaContent" class="searchable" style="display: none;"> <h1>Overview of Atypical Pneumonia</h1> <p>Atypical pneumonia is a type of lung infection caused by atypical pathogens. Unlike traditional bacterial pneumonia, atypical pneumonia is usually caused by viruses, bacteria, or other microorganisms, and its clinical presentation and treatment methods may vary.</p> <br> <h2>Causes of Atypical Pneumonia</h2> <p>Common causes of atypical pneumonia include:</p> <ul> <li>Measles virus (measles pneumonia)</li> <li>Influenza virus (influenza pneumonia)</li> <li>Coronavirus (such as SARS and COVID-19)</li> <li>Mycoplasma</li> <li>Chlamydia pneumoniae</li> </ul> <br> <h2>Symptoms of Atypical Pneumonia</h2> <p>Common symptoms of atypical pneumonia include:</p> <ul> <li>Fever</li> <li>Cough (dry or with phlegm)</li> <li>Rapid or difficult breathing</li> <li>Chest pain</li> <li>Fatigue and weakness</li> <li>Malaise</li> </ul> <br> <h2>Diagnosis and Treatment of Atypical Pneumonia</h2> <p>Diagnosis and treatment methods for atypical pneumonia include:</p> <ul> <li>Clinical assessment: The doctor will inquire about medical history, perform a physical examination, and monitor symptoms.</li> <li>Imaging tests: Such as chest X-ray or CT scan to examine lung lesions.</li> <li>Laboratory tests: Such as blood tests, sputum analysis, or throat swab tests to identify the pathogen.</li> <li>Antibiotics or antiviral medications: Treatment depends on the type of pathogen and may involve the use of antibiotics, antiviral drugs, or other appropriate medications.</li> <li>Supportive treatment: Such as rest, adequate fluid intake, antipyretic medications, and pain relief medication.</li> </ul> </div>


<div id="nightBlindnessContent" class="searchable" style="display: none;">
    <h1>Overview of Night Blindness</h1>
    <p>Night blindness, also known as nyctalopia, is a condition that affects vision. Individuals with this condition experience significant vision impairment in low light or dark environments, potentially resulting in a decline of night vision or an inability to see normally in the dark.</p>
    <br>
    <h2>Types of Night Blindness</h2>
    <p>There are two main types of night blindness:</p>
    <ul>
        <li><strong>Congenital Night Blindness</strong>: This type of night blindness is caused by genetic mutations and is present from birth.</li>
        <li><strong>Acquired Night Blindness</strong>: Acquired night blindness is caused by other factors, such as malnutrition, retinal diseases, optic nerve disorders, or other eye issues.</li>
    </ul>
    <br>
    <h2>Symptoms of Night Blindness</h2>
    <p>The primary symptom of night blindness is diminished vision in low-light conditions or the inability to see well in the dark. Some symptoms that may occur include:</p>
    <ul>
        <li>Blurred vision or loss of clarity in darkness</li>
        <li>Difficulty in discerning details of objects at night or in dim environments</li>
        <li>Needing longer periods to adjust from bright environments to dark ones</li>
        <li>Eyes feeling easily fatigued or uncomfortable</li>
    </ul>
    <br>
    <h2>Prevention and Treatment</h2>
    <p>The methods of prevention and treatment for night blindness depend on the cause of the condition. Here are some possible measures:</p>
    <ul>
        <li>Balanced Nutrition: Ensuring adequate intake of Vitamin A and other key nutrients.</li>
        <li>Eye Protection: Avoiding eye damage, such as not staring at bright lights for extended periods and using proper eye protection devices.</li>
        <li>Treating Underlying Diseases: If night blindness is caused by other vision problems, treating the underlying disease may help.</li>
        <li>Using Assistive Devices: Using assistive devices like night vision goggles or special glasses in the night or low-light environments can improve vision.</li>
    </ul>
    <br>
    <h2>Risk Factors for Night Blindness Might Include:</h2>
    <ul>
        <li>Poor nutrition, especially a deficiency in Vitamin A, as night blindness is a condition that affects vision, where individuals experience significant visual impairment in low-light or dark environments, potentially leading to a decline in night vision or an inability to see normally in the dark.</li>
        <br>
        <p>
            The main symptoms of night blindness include diminished vision in low-light conditions or the inability to see well. Symptoms may include blurred vision or loss of clarity in the dark, difficulty seeing object details at night or in dim environments, needing longer to adjust from bright to dark environments, and eyes feeling easily fatigued or uncomfortable.
        </p>
        <br>

        <br>
        <h2>Conclusion</h2>
        <p>Risk factors for night blindness may include poor nutrition, particularly Vitamin A deficiency, and other issues related to visual health. If you suspect that you or someone else has night blindness, it is best to consult an ophthalmologist for an evaluation and advice.</p>
</div>
<div id="searchResults" class="search-results">
    <!-- 搜索結果將在這裡顯示 -->
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 监听搜索表单的提交事件
        var searchForm = document.querySelector('.search-container form');
        searchForm.addEventListener('submit', function(event) {
            event.preventDefault(); // 防止表单提交

            var searchInput = searchForm.querySelector('input[name="search"]').value.toLowerCase();
            var searchableElements = document.querySelectorAll('.searchable');
            var searchResults = document.getElementById('searchResults');

            // 清空之前的搜索结果
            searchResults.innerHTML = '';

            // 遍历所有.searchable元素并搜索关键字
            searchableElements.forEach(function(element) {
                if(element.textContent.toLowerCase().includes(searchInput)) {
                    // 如果元素包含搜索关键字，则在结果容器中显示该元素
                    searchResults.innerHTML += '<div>' + element.innerHTML + '</div>';
                }
            });

            // 如果没有找到结果，显示提示信息
            if(searchResults.innerHTML === '') {
                searchResults.innerHTML = '<p>No relevant results found.</p>';
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var mainContent = document.getElementById('mainContent');
        var heartdiseaseButton = document.getElementById("heartDiseaseBtn");
        var diabetesButton = document.getElementById("diabetesBtn");
        var depressionButton = document.getElementById("depressionBtn");
        var asthmaButton = document.getElementById("asthmaBtn");
        var rabiesButton = document.getElementById("rabiesBtn");
        var mentalIllnessButton = document.getElementById("mentalIllnessBtn");
        var gastroenteritisButton = document.getElementById("gastroenteritisBtn");
        var polioButton = document.getElementById("polioBtn");
        var parkinsonsDiseaseButton = document.getElementById("parkinsonsDiseaseBtn");
        var anorexiaButton = document.getElementById("anorexiaBtn");
        var allergicRhinitisButton = document.getElementById("allergicRhinitisBtn");
        var atypicalPneumoniaButton = document.getElementById("atypicalPneumoniaBtn");
        var nightBlindnessButton = document.getElementById("nightBlindnessBtn");
        gastroenteritisButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (gastroenteritisContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'block';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none';

            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'
            }

        });

        mentalIllnessButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (mentalIllnessContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'block';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                nightBlindnessContent.style.display = 'none';

            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'
            }

        });

        rabiesButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (rabiesContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                rabiesContent.style.display = 'block';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                nightBlindnessContent.style.display = 'none';

            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'

            }

        });

        asthmaButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (asthmaContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'block';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                nightBlindnessContent.style.display = 'none';


            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'
            }

        });


        heartdiseaseButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (heartDiseaseContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaDiseaseContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                nightBlindnessContent.style.display = 'none';

            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'
            }

        });

        diabetesButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (diabetesContent.style.display === 'none') {
                mainContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                depressionContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                diabetesContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                nightBlindnessContent.style.display = 'none';

            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'
            }

        });

        depressionButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (depressionContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'block';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none';


            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'

            }

        });

        polioButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (depressionContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'block';
                anorexiaContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                nightBlindnessContent.style.display = 'none';


            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'

            }

        });

        parkinsonsDiseaseButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (depressionContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'block';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                nightBlindnessContent.style.display = 'none';


            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'

            }

        });


        anorexiaButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (depressionContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'block';
                allergicRhinitisContent.style.display = 'none';
                nightBlindnessContent.style.display = 'none';


            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'

            }

        });

        allergicRhinitisButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (depressionContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'block';
                nightBlindnessContent.style.display = 'none';


            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'
            }

        });

        atypicalPneumoniaButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (depressionContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'block'
                nightBlindnessContent.style.display = 'none';

            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'
            }

        });

        nightBlindnessButton.addEventListener("click", function(event) {
            event.preventDefault();

            if (depressionContent.style.display === 'none') {
                mainContent.style.display = 'none';
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'block'
            } else {
                diabetesContent.style.display = 'none';
                depressionContent.style.display = 'none';
                heartDiseaseContent.style.display = 'none';
                mainContent.style.display = 'block';
                asthmaContent.style.display = 'none';
                rabiesContent.style.display = 'none';
                mentalIllnessContent.style.display = 'none';
                gastroenteritisContent.style.display = 'none';
                polioContent.style.display = 'none';
                parkinsonsDiseaseContent.style.display = 'none';
                anorexiaContent.style.display = 'none';
                allergicRhinitisContent.style.display = 'none';
                atypicalPneumoniaContent.style.display = 'none'
                nightBlindnessContent.style.display = 'none'
            }

        });

    });

    document.getElementById('searchForm').onsubmit = function(event) {
        event.preventDefault(); // 防止表單提交
        var input = document.getElementById('searchInput').value.toLowerCase(); // 獲取輸入內容並轉為小寫
        var content = document.querySelectorAll('.searchable'); // 選擇所有可搜索的元素

        var results = '';
        content.forEach(function(node){
            if(node.textContent.toLowerCase().includes(input)) {
                results += '<div>' + node.innerHTML + '</div>'; // 如果包含搜索詞則添加到結果中
            }
        });

        document.getElementById('searchResults').innerHTML = results; // 顯示結果
    };
</script>

</body>
</html>