<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>疾病資訊網站</title>
    <script src="index.js" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="ChatBot.css">
</head>

<body>
<?php
include('navbar.php');
?>
<div class="navbar">
    <a href="index.php">首頁</a>
    <div class="dropdown">
        <a href="disease.html" class="dropbtn">疾病資料庫</a>
        <div class="dropdown-content">
            <!-- 神經系統疾病 -->
            <div class="dropdown-header">神經系統疾病</div>
            <a id="polioBtn" href="javascript:void(0);">小兒痲痺症</a>
            <a id="parkinsonsDiseaseBtn" href="javascript:void(0);">柏金遜症</a>
            <!-- 內分泌疾病 -->
            <div class="dropdown-header">內分泌疾病</div>
            <a id="diabetesBtn" href="javascript:void(0);">糖尿病</a>
            <!-- 心血管疾病 -->
            <div class="dropdown-header">心血管疾病</div>
            <a id="heartDiseaseBtn" href="javascript:void(0);">心臟病</a>
            <!-- 精神心理疾病 -->
            <div class="dropdown-header">精神心理疾病</div>
            <a id="depressionBtn" href="javascript:void(0);">抑鬱症</a>
            <a id="mentalIllnessBtn" href="javascript:void(0);">精神病</a>
            <a id="anorexiaBtn" href="javascript:void(0);">厭食症</a>
            <!-- 呼吸系統疾病 -->
            <div class="dropdown-header">呼吸系統疾病</div>
            <a id="asthmaBtn" href="javascript:void(0);">哮喘</a>
            <a id="atypicalPneumoniaBtn" href="javascript:void(0);">非典型肺炎</a>
            <!-- 傳染病 -->
            <div class="dropdown-header">傳染病</div>
            <a id="rabiesBtn" href="javascript:void(0);">狂犬病</a>
            <a id="gastroenteritisBtn" href="javascript:void(0);">腸胃炎</a>
            <!-- 眼科疾病 -->
            <div class="dropdown-header">眼科疾病</div>
            <a id="nightBlindnessBtn" href="javascript:void(0);">夜盲症</a>
            <!-- 過敏症 -->
            <div class="dropdown-header">過敏症</div>
            <a id="allergicRhinitisBtn" href="javascript:void(0);">過敏性鼻炎</a>
        </div>
    </div>
    <a href="indexeng.php">英</a>
    <div class="search-container">
        <form action="/search" method="get">
            <input type="text" placeholder="搜索..." name="search">
            <button type="submit">搜尋</button>
        </form>
    </div>
</div>

<div class="main" id="mainContent">
    <h1>歡迎來到疾病資訊網站</h1>
    <p>這裡是一些疾病的相關資訊...</p>

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
    <h1>心臟病概述</h1>
    <p>心臟病是全球主要的死因之一，它包括了各種影響心臟功能的疾病。這些疾病可能涉及心臟的其他結構，如冠狀動脈、心肌、瓣膜、或者是傳導系統。</p>
    <br>
    <h2>心臟病的類型</h2>
    <p>心臟病的種類非常廣泛，包括但不限於以下幾種：</p>
    <ul>
        <li><strong>冠狀動脈疾病（CAD）</strong>:心臟的主要血管受損，可能導致心臟病發作。</li>
        <li><strong>心肌梗死</strong>：俗稱心臟病發作，發生於心肌的血流被阻斷時。</li>
        <li><strong>心力衰竭</strong>：心臟無法有效泵血滿足身體的需求。</li>
        <li><strong>心律不整</strong>：心跳過快、過慢或不規則。</li>
        <li><strong>心瓣膜疾病</strong>：涉及心臟瓣膜開閉異常。</li>
        <li><strong>先天性心臟病</strong>：出生時存在的心臟結構問題。</li>
        <li><strong>心肌病</strong>：影響心肌的疾病，可能導致心臟擴大或 變硬。</li>
        <li><strong>心包炎</strong>：心包的炎症。</li>
    </ul>
    <br>
    <h2>心臟病的症狀</h2>
    <p>心臟病的症狀因人而異。一些人可能根本不知道自己有心臟病，而另一些人則可能經歷以下一種或多種症狀：</p>
    <ul>
        <li>胸痛或不適</li>
        <li>呼吸困難</li>
        <li>心悸</li>
        <li>虛弱或頭暈</li>
        <li>疲勞</li>
        <li>腳踝、腿部或腹部腫脹</li>
    </ul>
    <br>
    <h2>預防與治療</h2>
    <p>心臟病的預防和治療方法包括生活方式的改變、藥物治療以及可能需要的手術治療。以下是一些預防措施：</p>
    <ul>
        <li>健康飲食：多吃水果、蔬菜和全穀類食物。</li>
        <li>定期運動：每週至少150分鐘的中等強度運動。</li>
        <li>保持健康體重：減少體重可以減輕心臟的負擔。</li>
        <li>戒煙：吸煙是心臟病的主要風險因素之一。</li>
        <li>管理壓力：學習放鬆技巧，如深呼吸、冥想或瑜伽。</li>
        <li>定期檢查：定期檢查血壓、膽固醇和糖尿病。</li>
    </ul>
    <br>
    <p>對於已經診斷出心臟病的患者，根據具體情況，醫生可能會推薦藥物治療，如降壓藥、抗凝血藥、降膽固醇藥物、或者其他有助於控制心臟病症狀的藥物。在某些情況下，可能需要進行血管搭橋手術、心臟瓣膜手術或安裝心臟起搏器等手術來治療心臟病。</p>
    <br>
    <h2>心臟病的風險因素</h2>
    <p>許多因素可能增加心臟病的風險，包括：</p>
    <ul>
        <li>年齡：隨著年齡增長，心臟病的風險也會增加。</li>
        <li>性別：男性比女性更早出現心臟病的風險。</li>
        <li>家族史：心臟病如果在家族中有先例，風險會更高。</li>
        <li>吸煙：吸煙會顯著增加心臟病的風險。</li>
        <li>不良飲食：高脂肪、高鈉和高糖飲食會增加心臟病的風險。</li>
        <li>高血壓和高膽固醇：這些條件可導致血管損害和增加心臟病的風險。</li>
        <li>過度體重或肥胖：增加心臟負擔，並可導致其他風險因素。</li>
        <li>糖尿病：糖尿病患者的心臟病風險更高。</li>
        <li>缺乏運動：生活方式缺乏活動會增加心臟病風險。</li>
        <li>過度飲酒：長期過量飲酒可以引起心臟問題。</li>
    </ul>
    <br>
    <h2>心臟病的診斷</h2>
    <p>診斷心臟病通常涉及一系列的測試，包括：</p>
    <ul>
        <li>電心圖（ECG）：檢查心臟電活動。</li>
        <li>心臟超聲波（心動圖）：使用超聲波檢查心臟的結構和功能。</li>
        <li>運動壓力測試：觀察運動時心臟的表現。</li>
        <li>心導管檢查：檢查冠狀動脈中的堵塞情況。</li>
        <li>胸部X光：檢查心臟、肺和胸部大血管的狀況。</li>
        <li>血液檢查：檢查與心臟病相關的生物標記。</li>
    </ul>
    <br>
    <h2>結論</h2>
    <p>心臟病是一個嚴重的健康問題，但通過健康的生活方式選擇、定期的醫療檢查和適當的管理，許多心臟病是可以預防和治療的。如果您有心臟病的風險因素，請諮詢醫生以獲得針對您個人健康狀況的建議和治療方案。 如果你有任何症狀或有糖尿病家族史，請諮詢醫生。</p>
</div>

<div id="diabetesContent" class="searchable" style="display: none;">
    <h1>糖尿病概述</h1>
    <p>糖尿病是一種慢性疾病，其特徵是高血糖水平。 血糖是主要能量來源，來自食物中的糖。 胰島素是一種由胰臟產生的激素，幫助血糖進入身體的細胞以供使用。 當患有糖尿病時，身體要么不能有效地製造胰島素，要么不能正確使用其製造的胰島素。</p>

    <h2>糖尿病的類型</h2>
    <p>主要有三種類型的糖尿病：</p>
    <ul>
        <li><strong>1型糖尿病</strong>：通常診斷於兒童和青少年，身體無法生產胰島素。</li>
        <li><strong>2型糖尿病</strong>：與體重和身體活動有關，身體無法正確使用胰島素。</li>
        <li><strong>妊娠糖尿病</strong>：有些女性在懷孕期間會有高血糖。</li>
    </ul>

    <h2>糖尿病的症狀</h2>
    <p>糖尿病的普遍症狀包括：</p>
    <ul>
        <li>經常感到口渴</li>
        <li>經常小便</li>
        <li>極度飢餓</li>
        <li>體重無緣無故下降</li>
        <li>極度疲倦</li>
        <li>傷口癒合緩慢</li>
    </ul>

    <h2>預防與治療</h2>
    <p>雖然第1型糖尿病無法預防，但第2型糖尿病通常可以透過健康的飲食和定期的身體活動來預防或延遲。 治療包括藥物和胰島素治療，以及血糖監測。</p>

    <h2>結論</h2>
    <p>糖尿病是一個全球性的健康問題，但透過適當的管理和治療，患者可以過著健康的生活。 如果你有任何症狀或有糖尿病家族史，請諮詢醫生。</p>
</div>

<div id="depressionContent" class="searchable" style="display: none;">
    <h1>抑鬱症概述</h1>
    <p>抑鬱症（Depression），也稱為重性抑鬱障礙（Major Depressive Disorder），是一種常見而嚴重的醫學疾病，它嚴重影響了一個人的感受、思考和行為方式。幸運的是，它也是可治療的。抑鬱症引起的情緒和身體問題可以影響一個人的工作和日常生活。</p>
    <br>

    <h2>抑鬱症的症狀</h2>
    <p>抑鬱症的症狀範圍從輕度到重度，可能包括：</p>
    <ul>
        <li>持續的悲傷、焦慮或“空虛”感覺</li>
        <li>感覺絕望、無助、無價值或無力</li>
        <li>對以前感興趣的活動失去興趣或樂趣，包括性活動</li>
        <li>能量減少或疲勞感增加</li>
        <li>難以集中注意力、記住事情或做出決定</li>
        <li>睡眠障礙，如失眠或過度睡眠</li>
        <li>食慾變化，可能伴隨體重減輕或增加</li>
        <li>躁動或遲緩的行為（他人可觀察到）</li>
        <li>思考、說話或嘗試自殺的行為或計劃</li>
        <li>持續的身體症狀，如頭痛、消化障礙或慢性疼痛</li>
    </ul>
    <br>

    <h2>抑鬱症的成因</h2>
    <p>抑鬱症的確切成因尚不完全清楚，但它似乎涉及多種因素，包括：</p>
    <ul>
        <li>遺傳：家族中有抑鬱症病史的人患病風險更高。</li>
        <li>生物化學：大腦中化學物質失衡可能參與抑鬱症的發展。</li>
        <li>環境：持續的壓力、創傷或負面生活事件可能觸發抑鬱症。</li>
        <li>心理因素：某些人格特質、思維模式或情感處理方式可能使某些人更容易患上抑鬱症。</li>
    </ul>
    <br>

    <h2>抑鬱症的治療</h2>
    <p>雖然第1型糖尿病無法預防，但第2型糖尿病通常可以透過健康的飲食和定期的身體活動來預防或延遲。 治療包括藥物和胰島素治療，以及血糖監測。</p>
    <ul>
        <li>藥物治療：通常包括抗抑鬱藥，它們可以調整大腦中那些影響情緒和壓力反應的化學物質。</li>
        <li>心理治療：如認知行為治療（CBT）和人際治療，有助於改變負面思維模式並提高應對技能。</li>
        <li>生活方式和家庭支持：良好的生活習慣和來自家人和朋友的支持也對康復很重要。</li>
    </ul>
    <br>

    <h2>抑鬱症的預防</h2>
    <p>雖然無法完全預防抑鬱症，但以下策略可能有所幫助：</p>
    <ul>
        <li>維持積極的人際關係並定期參加社交活動。</li>
        <li>確保足夠的睡眠和營養。</li>
        <li>發展應對壓力的策略。</li>
        <li>尋求專業幫助，當心理壓力或情緒困擾出現。</li>
    </ul>
    <br>

    <h2>結論</h2>
    <p> 抑鬱症是一種嚴重但可治療的疾病，它需要及早識別和治療。如果你或你認識的人表現出抑鬱症的症狀，尋求專業健康提供者的幫助至關重要。及時的干預可以顯著提高生活質量。</p>
</div>

<div id="asthmaContent" class="searchable" style="display: none;">
    <h1>哮喘概述</h1>
    <p>哮喘是一種常見的慢性呼吸系統疾病，它影響到氣道，使氣道變得狹窄並腫脹，並可能產生額外的黏液。這可以導致呼吸困難，引起咳嗽、哮鳴和胸悶。</p>
    <br>
    <h2>哮喘的類型</h2>
    <p>哮喘的種類根據症狀的嚴重程度和觸發因素的不同而有所不同，包括：</p>
    <ul>
        <li><strong>過敏性哮喘</strong>：由空氣中的過敏原，如花粉、塵蟎或寵物皮屑引起。</li>
        <li><strong>運動誘發性哮喘</strong>：運動時症狀加劇。</li>
        <li><strong>職業性哮喘</strong>：工作環境中的化學物質或粉塵引起。</li>
        <li><strong>夜間哮喘</strong>：晚上睡覺時症狀加劇。</li>
        <li><strong>咳嗽變異性哮喘</strong>：主要症狀是持續性的乾咳。</li>
    </ul>
    <br>
    <h2>哮喘的症狀</h2>
    <p>哮喘症狀的嚴重性在不同的人之間和在同一人的不同時間可能會有所不同。常見的症狀包括：</p>
    <ul>
        <li>哮鳴聲，尤其是在呼氣時</li>
        <li>胸悶或胸痛</li>
        <li>持續咳嗽</li>
        <li>呼吸困難或喘息</li>
        <li>睡眠困難，因為呼吸問題</li>
    </ul>
    <br>
    <h2>預防與治療</h2>
    <p>哮喘的治療通常需要一種綜合方法，包括避免觸發因素、使用藥物以及在必要時進行應急治療。以下是一些預防和管理哮喘的方法：</p>
    <ul>
        <li>了解並避開個人的哮喘觸發因素。</li>
        <li>使用吸入性類固醇來減少氣道的炎症。</li>
        <li>在哮喘發作時使用快速緩解吸入劑。</li>
        <li>定期監測呼吸功能。</li>
        <li>制定哮喘行動計劃，並按計劃進行管理。</li>
    </ul>
    <br>
    <p>對於許多哮喘患者來說，隨著適當的治療和管理，他們可以過上正常生活並參與所有活動。</p>
    <br>
    <h2>哮喘的風險因素</h2>
    <p>哮喘可能由多種因素引起，風險因素包括：</p>
    <ul>
        <li>家族遺傳：哮喘在某些家族中更為常見。</li>
        <li>過敏：有過敏史的人更容易發展成哮喘。</li>
        <li>環境因素：空氣污染、煙霧、化學品等可能增加哮喘的風險。</li>
        <li>職業：與某些化學物質或塵埃接觸的工作可能增加哮喘的風險。</li>
        <li>吸煙：煙草煙霧是哮喘發作的一個常見觸發因素。</li>
        <li>肥胖：肥胖與增加哮喘風險有關。</li>
        <li>呼吸道感染：童年時期的嚴重呼吸道感染可能增加哮喘的風險。</li>
    </ul>
    <br>
    <h2>哮喘的診斷</h2>
    <p>診斷哮喘可能涉及以下測試：</p>
    <ul>
        <li>肺功能測試：測量氣流和肺容量。</li>
        <li>峰流速度測量：測量呼出氣流的最大速度。</li>
        <li>過敏測試：確定可能的過敏原。</li>
        <li>哮喘控制測試：評估哮喘症狀對日常生活的影響。</li>
    </ul>
    <br>
    <h2>結論</h2>
    <p>哮喘是一種可以透過藥物、環境控制和生活方式調整來有效管理的慢性病。如果你懷疑自己或你的家人有哮喘，請尋求專業醫療幫助來獲得適當的診斷和治療。</p>
</div>

<div id="rabiesContent" class="searchable" style="display: none;">
    <h1>狂犬病概述</h1>
    <p>狂犬病是一種由狂犬病病毒引起的急性病毒性腦炎，它在全球範圍內影響著哺乳動物，包括人類。這種疾病主要通過感染動物的咬傷來傳播，犬類是最常見的傳播源。一旦出現症狀，狂犬病幾乎總是致命的。</p>
    <br>
    <h2>狂犬病的傳播方式</h2>
    <p>狂犬病通常由以下方式傳播：</p>
    <ul>
        <li>被感染動物（通常是狗、狐狸、猙獰和蝙蝠）的咬傷。</li>
        <li>感染動物的唾液與開放性傷口或黏膜（例如眼睛、鼻腔、口腔）接觸。</li>
    </ul>
    <br>
    <h2>狂犬病的症狀</h2>
    <p>狂犬病的症狀分為兩個階段：</p>
    <ul>
        <li>前期症狀：包括發燒、頭痛、感到不適、焦慮、睡眠困難和咬傷部位的疼痛或不適。</li>
        <li>進展階段症狀：神經系統受損造成的痙攣、狂躁、行為改變、恐水症（害怕水）和吞咽困難。</li>
    </ul>
    <br>
    <h2>預防與治療</h2>
    <p>狂犬病的預防措施非常重要，因為一旦出現症狀，疾病幾乎無法治愈。預防措施包括：</p>
    <ul>
        <li>狂犬病疫苗：對於高風險群體，如獸醫、動物控制和保護工作人員以及旅行者，應接種疫苗。</li>
        <li>避免與野生動物和不熟悉的家畜接觸。</li>
        <li>寵物疫苗：定期為寵物接種狂犬病疫苗。</li>
        <li>如果被動物咬傷或抓傷，應立即用肥皂和水清洗傷口並尋求醫療幫助。</li>
    </ul>
    <br>
    <h2>結論</h2>
    <p>如果認為自己可能已經暴露於狂犬病病毒之下，應立即尋求醫療幫助。狂犬病的暴露後預防（PEP）是一系列的疫苗注射，可以防止病毒發展成狂犬症。</p>
</div>

<div id="mentalIllnessContent" class="searchable" style="display: none;">
    <h1>精神病概述</h1>
    <p>精神病是影響思維、情感和行為的心理健康狀況群組。這些條件可能會影響個人的工作能力、人際關係以及日常生活的各個方面。</p>
    <br>
    <h2>精神病的類型</h2>
    <p>精神疾病的類型繁多，包括：</p>
    <ul>
        <li><strong>情感性障礙</strong>：如抑鬱症和躁狂症。</li>
        <li><strong>焦慮症</strong>：如廣泛性焦慮症、社交焦慮症和恐慌症。</li>
        <li><strong>精神分裂症</strong>：涉及失真的思維和感知。</li>
        <li><strong>人格障礙</strong>：如邊緣性人格障礙和反社會人格障礙。</li>
        <li><strong>創傷後壓力障礙（PTSD）</strong>：在經歷創傷事件後出現。</li>
        <li><strong>強迫症</strong>：包含強迫性思考和行為。</li>
        <li><strong>飲食障礙</strong>：如厭食症和暴食症。</li>
        <li><strong>成癮症</strong>：包括藥物濫用和酒精依賴。</li>
    </ul>
    <br>
    <h2>精神病的症狀</h2>
    <p>精神病的症狀廣泛且多樣，包括：</p>
    <ul>
        <li>極端情緒波動</li>
        <li>思維或感知的改變</li>
        <li>虛幻或妄想</li>
        <li>隔離社交或撤退</li>
        <li>過度或不恰當的擔憂或恐懼</li>
        <li>睡眠問題</li>
        <li>精力減退或疲勞感</li>
        <li>對日常活動和興趣的喪失</li>
    </ul>
    <br>
    <h2>預防與治療</h2>
    <p>精神病的預防和治療可能涉及多種策略：</p>
    <ul>
        <li>心理治療，包括個人或團體諮商。</li>
        <li>藥物治療，使用抗抑鬱劑、抗精神病藥物等。</li>
        <li>生活方式改變，包括健康飲食、規律運動和良好睡眠習慣。</li>
        <li>社會和社區支持，包括自助團體和支援網絡。</li>
    </ul>
    <br>
    <p>精神病的研究是一個不斷發展的領域，科學家正在探索新的治療方法和更深入地理解大腦與行為之間的關聯。這包括遺傳學研究、新藥物的開發以及對腦部活動模式的研究。</p>
    <p>總之，精神病是複雜的條件，它們需要個性化的治療和全面的支持系統。無論是個人還是社會，都應該努力提高對精神病的認識，消除污名化，提供必要的資源來支持那些受到影響的個體和他們的家庭。</p>
</div>

<div id="gastroenteritisContent" class="searchable" style="display: none;">
    <h1>腸胃炎概述</h1>
    <p>腸胃炎是指胃和小腸的炎症，通常是由於病毒或細菌感染導致。這種疾病俗稱“胃流感”，但它與流感病毒無關。腸胃炎可能會引起腹瀉、嘔吐、胃痛和發燒等症狀，並可能導致脫水。</p>
    <br>
    <h2>腸胃炎的類型</h2>
    <p>腸胃炎的類型通常基於其病原體，包括：</p>
    <ul>
        <li><strong>病毒性腸胃炎</strong>：最常見的原因是諾羅病毒和輪狀病毒。</li>
        <li><strong>細菌性腸胃炎</strong>：可能由食物中毒引起，例如沙門氏菌或大腸桿菌感染。</li>
        <li><strong>寄生蟲性腸胃炎</strong>：由寄生蟲如賈第鞭毛蟲引起。</li>
    </ul>
    <br>
    <h2>腸胃炎的症狀</h2>
    <p>腸胃炎的症狀可能包括：</p>
    <ul>
        <li>水樣腹瀉</li>
        <li>嘔吐</li>
        <li>腹部疼痛和痙攣</li>
        <li>低燒或發燒</li>
        <li>頭痛和肌肉痛</li>
        <li>食慾不振</li>
    </ul>
    <br>
    <h2>預防與治療</h2>
    <p>腸胃炎的治療主要是對症治療，特別是保持水分和電解質平衡。以下是一些預防措施和治療方法：</p>
    <ul>
        <li>保持良好衛生：勤洗手是預防病毒和細菌感染的關鍵。</li>
        <li>飲食管理：在感染初期避免固體食物，轉而飲用湯水或電解質飲料。</li>
        <li>藥物治療：某些情況下可能需要使用止吐藥或止瀉藥。</li>
        <li>適量進食易消化的食物：如香蕉、米飯、蘋果醬和烤麵包。</li>
        <li>脫水嚴重時可能需要靜脈注射液體和電解質。</li>
    </ul>
    <br>
    <p>對於細菌性腸胃炎，醫生可能會根據病原體類型開抗生素。如果症狀嚴重或持續不退，應及時尋求醫療幫助。</p>
</div>

<div id="polioContent" class="searchable" style="display: none;">
    <h1>小兒痲痺症概述</h1>
    <p>小兒痲痺症，又稱脊髓灰質炎，是一種由小兒痲痺病毒引起的傳染病。它主要影響5歲以下的兒童，並可能導致不同程度的麻痺。</p>
    <br>
    <h2>小兒痲痺症的類型</h2>
    <p>小兒痲痺症主要有三種類型：</p>
    <ul>
        <li><strong>脊髓型小兒痲痺症</strong>：影響脊髓，可能導致肢體麻痺。</li>
        <li><strong>延髓型小兒痲痺症</strong>：影響呼吸和吞嚥肌肉。</li>
        <li><strong>無麻痺型小兒痲痺症</strong>：病毒感染後未出現麻痺症狀。</li>
    </ul>
    <br>
    <h2>小兒痲痺症的症狀</h2>
    <p>小兒痲痺症的症狀可能包括：</p>
    <ul>
        <li>發熱</li>
        <li>疲勞</li>
        <li>頭痛</li>
        <li>嘔吐</li>
        <li>頸部僵硬和疼痛</li>
        <li>四肢無力</li>
    </ul>
    <br>
    <h2>預防與治療</h2>
    <p>小兒痲痺症的預防主要依靠疫苗接種。目前沒有特效藥物可以治愈小兒痲痺症，治療主要針對症狀進行，包括物理治療和支持療法。</p>
    <br>
    <h2>小兒痲痺症的風險因素</h2>
    <p>導致小兒痲痺症的風險因素包括：</p>
    <ul>
        <li>未接種疫苗</li>
        <li>居住在病毒流行區</li>
        <li>免疫系統較弱</li>
    </ul>
    <br>
    <h2>小兒痲痺症的診斷</h2>
    <p>診斷小兒痲痺症通常依據臨床症狀和實驗室檢測，如病毒培養和PCR檢測。</p>
    <br>
    <h2>結論</h2>
    <p>小兒痲痺症是一種可預防的疾病，接種疫苗是預防該病的最有效方法。對於感染者，及時的支持性治療可以改善部分症狀</p>
</div>

<div id="parkinsonsDiseaseContent" class="searchable" style="display: none;">
    <h1>柏金遜症概述</h1>
    <p>柏金遜症是一種進行性神經退行性疾病，主要影響運動功能。它通常出現在中老年人群中，並且隨著病情的進展，症狀會逐漸加重。</p>
    <h2>柏金遜症的類型</h2>
    <ul>
        <li><strong>原發性柏金遜症</strong>：這是最常見的類型，其原因不明。</li>
        <li><strong>繼發性柏金遜症</strong>：可能由藥物、腦部損傷或其他疾病引起。</li>
    </ul>
    <br>
    <h2>柏金遜症的症狀</h2>
    <ul>
        <li>手震或震顫</li>
        <li>肌肉僵硬</li>
        <li>運動緩慢</li>
        <li>平衡和協調問題</li>
        <li>自主神經系統功能障礙</li>
        <li>睡眠障礙</li>
        <li>語言和吞嚥困難</li>
        <li>認知障礙和情緒問題</li>
    </ul>
    <br>
    <h2>預防與治療</h2>
    <p>目前尚無法根治柏金遜症，但是藥物治療和手術療法可以幫助控制症狀。生活方式的調整，如定期運動和平衡飲食，也能對患者的生活質量有所改善。</p>
    <ul>
        <li>藥物治療：通過藥物如左旋多巴來補充大腦中的多巴胺。</li>
        <li>手術治療：包括深腦刺激等手術方式。</li>
        <li>物理治療和職業治療：幫助患者改善運動功能。</li>
    </ul>
    <br>
    <h2>柏金遜症的風險因素</h2>
    <ul>
        <li>年齡：大多數患者在60歲以上被診斷出柏金遜症。</li>
        <li>遺傳：有家族成員患有柏金遜症的人，風險更高。</li>
        <li>性別：男性相比女性有較高的風險。</li>
        <li>環境因素：如長期接觸農藥和其他毒素。</li>
    </ul>
    <br>
    <h2>結論</h2>
    <p>患有帕金森氏症可能具有挑戰性，但許多人帶著這種疾病過著充實、積極的生活。多學科治療方法，包括物理和職業治療、語言治療和營養諮詢，可以幫助控制症狀並改善生活品質。</p>
</div>

<div id="anorexiaContent" class="searchable" style="display: none;">
    <h1>厭食症概述</h1>
    <p>厭食症是一種影響飲食行為和身體形象的嚴重精神疾病。患者對體重和身體形象有異常的恐懼和關注，並通過限制飲食來控制體重。這種疾病不僅影響身體健康，還可能導致心理和社交問題。</p> <br>
    <h2>厭食症的類型</h2>
    <p>厭食症有兩個主要類型：</p>
    <ul>
        <li><strong>限食型厭食症</strong>：患者通過限制飲食來減重，常常節制食物攝入量並對卡路里計算過度關注。</li>
        <li><strong>排除性／嘔吐型厭食症</strong>：患者除了限制飲食外，還使用嘔吐、使用瀉藥或過度運動等方式來控制體重。</li>
    </ul> <br>
    <h2>厭食症的症狀</h2>
    <p>厭食症的症狀和體徵可能包括：</p>
    <ul>
        <li>體重明顯低於正常範圍</li>
        <li>對體重和身體形象的過度關注</li>
        <li>拒絕進食或食量極少</li>
        <li>對飲食成分的過度限制</li>
        <li>對食物熱量計算的過度關注</li>
        <li>對自己的體型和體重有扭曲的認知</li>
        <li>處理食物的奇特行為，如切成小塊或拒絕特定類別的食物</li>
        <li>體力和精力下降</li>
        <li>焦慮和抑鬱情緒</li>
        <li>社交退縮和孤立</li>
    </ul> <br>
    <h2>厭食症的預防和治療</h2>
    <p>預防和治療厭食症需要綜合的方法，包括：</p>
    <ul>
        <li>心理治療：例如認知行為療法、家庭療法和支持性心理治療。</li>
        <li>營養諮詢：提供健康的飲食指導，幫助患者建立正常的飲食習慣。</li>
        <li>醫學監測：定期檢查身體狀況，包括體重、身高、心血管功能等。</li>
        <li>藥物治療：在某些情況下，醫生可能會使用藥物來治療與厭食症相關的焦慮、抑鬱等症狀。</li>
    </ul>
    <h2>結論</h2>
    <p>神經性厭食症是一種嚴重的心理健康狀況，但透過早期介入、適當的治療和強大的支持系統，恢復是可能的。 如果您或您認識的人正在與神經性厭食症作鬥爭，請務必向專門治療飲食失調的醫療保健提供者尋求專業協助。 請記住，復原是一個旅程，支持和理解在復原過程中發揮著至關重要的作用。</p>
</div>

<div id="allergicRhinitisContent" class="searchable" style="display: none;">
    <h1>過敏性鼻炎概述</h1>
    <p>過敏性鼻炎是一種常見的過敏性疾病，主要表現為鼻黏膜的發炎和過敏反應。當過敏原（如花粉、塵蟎或寵物皮屑）進入鼻腔時，免疫系統會釋放化學物質，引起鼻腔組織的發炎和過敏症狀。</p> <br>
    <h2>過敏性鼻炎的類型</h2>
    <p>根據病因和發作時間，過敏性鼻炎可分為以下兩種類型：</p>
    <ul>
        <li><strong>季節性過敏性鼻炎</strong>：通常與花粉季節性散播有關，例如春季樹木花粉過敏。</li>
        <li><strong>全年性過敏性鼻炎</strong>：與持續存在的過敏原（如塵蟎或寵物皮屑）接觸有關，可全年發作。</li>
    </ul> <br>
    <h2>過敏性鼻炎的症狀</h2>
    <p>過敏性鼻炎的常見症狀包括：</p>
    <ul>
        <li>頻繁的打噴嚏</li>
        <li>鼻塞和流鼻涕</li>
        <li>鼻部瘙癢和發炎</li>
        <li>喉嚨的不適和咳嗽</li>
        <li>眼睛發癢、紅腫和流淚</li>
        <li>頭痛和面部壓力感</li>
        <li>睡眠問題和疲勞感</li>
    </ul> <br>
    <h2>過敏性鼻炎的預防和治療</h2>
    <p>預防和治療過敏性鼻炎的方法包括：</p>
    <ul>
        <li>避免接觸過敏原：盡量避免與引起過敏的物質接觸，如花粉、塵蟎或寵物皮屑。</li>
        <li>室內空氣淨化器：使用空氣淨化器可以減少室內的過敏原濃度。</li>
        <li>過敏藥物：醫生可能會建議使用抗組織胺藥物、類固醇鼻噴劑或其他過敏藥物來緩解症狀。</li>
        <li>免疫療法：對於嚴重的過敏性鼻炎，醫生可能會推薦免疫療法，以增強免疫系統對過敏原的耐受性。</li>
    </ul> <br>

</div>

<div id="atypicalPneumoniaContent" class="searchable" style="display: none;"> <h1>非典型肺炎（Atypical Pneumonia）概述</h1> <p>非典型肺炎是一種由非典型病原體引起的肺部感染。與傳統的細菌性肺炎不同，非典型肺炎通常由病毒、細菌或其他微生物引起，並且其臨床表現和治療方法也有所不同。</p> <br> <h2>非典型肺炎的病因</h2> <p>非典型肺炎的常見病因包括：</p> <ul> <li>麻疹病毒（麻疹肺炎）</li> <li>流感病毒（流感肺炎）</li> <li>冠狀病毒（例如SARS和COVID-19）</li> <li>體細胞支原體</li> <li>肺炎支原體</li> </ul> <br> <h2>非典型肺炎的症狀</h2> <p>非典型肺炎的常見症狀包括：</p> <ul> <li>發燒</li> <li>咳嗽（乾咳或有痰）</li> <li>呼吸急促</li> <li>胸痛</li> <li>乏力和虛弱感</li> <li>全身不適</li> </ul> <br> <h2>非典型肺炎的診斷和治療</h2> <p>非典型肺炎的診斷和治療方法包括：</p> <ul> <li>臨床評估：醫生會詢問病史、進行體格檢查和監測症狀。</li> <li>影像學檢查：如胸部X光或CT掃描，以檢查肺部病變。</li> <li>實驗室檢查：例如血液檢查、痰液分析或喉嚨拭子檢測，以確定病原體。</li> <li>抗生素或抗病毒藥物：治療取決於病原體類型，可能使用抗生素、抗病毒藥物或其他適當的藥物。</li> <li>支持性治療：如休息、充足的水分攝取、退燒藥物和疼痛緩解藥物。</li> </ul> </div>

<div id="nightBlindnessContent" class="searchable" style="display: none;"> <h1>夜盲症概述</h1> <p>夜盲症，也稱為夜盲症綜合症，是一種影響視力的疾病。 患者在光線不足或黑暗環境中視力受到明顯影響，可能會出現夜間視力衰退或無法在暗處正常見物的情況。 </p> <br> <h2>夜盲症的類型</h2> <p>夜盲症可以分為先天性和後天性兩種類型：</p> <ul> <li><strong>先天性夜盲症</strong>：這是一種由基因突變引起的夜盲症，患者在出生時即有視力問題。 </li> <li><strong>後天性夜盲症</strong>：後天性夜盲症是由其他因素引起的，例如營養不良、視網膜疾病、視神經疾病或其他眼睛問題。 </li> </ul> <br> <h2>夜盲症的症狀</h2> <p>夜盲症的主要症狀是在光線不足的環境中視力衰退或無法正常見物。 以下是一些可能出現的症狀：</p> <ul> <li>在黑暗中視力模糊或失去清晰度</li> <li>在夜間或昏暗的環境中有困難看清物體細節</li > <li>需要更長的時間來適應從明亮環境轉移到黑暗環境</li> <li>眼睛感到容易疲勞或不適</li> </ul> <br> <h2>預防和治療</h2> <p>夜盲症的預防和治療方法取決於疾病的原因。 以下是一些可能的措施：</p> <ul> <li>營養均衡：確保攝取足夠的維生素A和其他關鍵營養物質。 </li> <li>眼部保護：避免眼睛受到傷害，例如避免長時間注視亮光或使用適當的眼部保護裝置。 </li> <li>治療潛在疾病：如果夜盲症是由其他視覺問題引起的，治療基礎疾病可能會有所幫助。 </li> <li>使用輔助設備：在夜間或光線不足的環境中使用輔助設備，例如夜視鏡或特殊眼鏡，可以改善視力。 </li> </ul> <br> <h2>夜盲症的危險因子可能包括：</h2><ul> <li>營養不良，特別是維生素A夜盲症 是一種影響視力的疾病，患者在光線不足或黑暗環境中視力受到明顯影響，可能出現夜間視力衰退或無法在暗處正常看物的情況。
            <br>
            <h2>
                夜盲症的主要症狀是在光線不足的環境中視力衰退或無法正常看物。 一些可能出現的症狀包括在黑暗中視力模糊或失去清晰度、在夜間或昏暗的環境中有困難看清物體細節、需要更長的時間來適應從明亮環境轉移到黑暗環境，以及眼睛感到容易疲勞 或不適。
            </h2>
            <br>

            <br>
            <h2>結論</h2>
            <p>夜盲症的危險因子可能包括營養不良，特別是維生素A缺乏，以及其他與視覺健康相關的問題。 如果您懷疑自己或他人患有夜盲症，最好諮詢眼科專家進行評估和建議。</p>

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
                            searchResults.innerHTML = '<p>沒有找到相關結果。</p>';
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

            </script>

</body>

</html>
