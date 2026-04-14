
/* ══════════════════════════════════════════════════
   TRANSLATIONS
══════════════════════════════════════════════════ */
function deepMerge(target, source) {
  for (const key in source) {
    if (source[key] && typeof source[key] === 'object' && !Array.isArray(source[key])) {
      target[key] = deepMerge(target[key] && typeof target[key] === 'object' ? target[key] : {}, source[key]);
    } else {
      target[key] = source[key];
    }
  }
  return target;
}

const STATIC_T = {
  en:{
    selTitle:"🌟 WonderLand", selSub:"Choose your age to begin the adventure!",
    tinyRange:"Ages 3 – 5", tinyLabel:"Tiny Tots", tinyDesc:"Big pictures · Simple taps · Colourful games",
    midRange:"Ages 6 – 9", midLabel:"Little Explorers", midDesc:"Short stories · MCQs · Memory games",
    bigRange:"Ages 10 – 13", bigLabel:"Young Thinkers", bigDesc:"Chapter stories · Science quizzes · Word puzzles",
    selParentLink:"🔐 Parent / Guardian Settings",
    backAge:"Age", logoSuffix:"WonderLand",
    homeGreet:{"tiny":"Hello, little one! 👋","mid":"Hello, Explorer! 👋","big":"Hello, Thinker! 👋"},
    homeTitle:{"tiny":"Let's have fun and learn!","mid":"What shall we learn today?","big":"Ready to explore and think?"},
    homeProgressLabel:"Today's journey", homeProgLbl:"0 of 4 done",
    homeParentBtnTxt:"Parent zone",
    storiesTitle:{"tiny":"📚 Stories","mid":"📚 Stories","big":"📗 Reading"},
    readerBackTxt:"Library", prevBtnTxt:"Back", nextBtnTxt:"Next", finishTxt:"Finish ✓", readAloudTxt:"Read aloud",
    quizIntroTitle:{"tiny":"Fun Quiz! 🌟","mid":"Story Quiz! 📖","big":"Science Quiz! 🔬"},
    quizIntroSub:"Answer questions and earn stars!",
    quizStarLabel:"+5 stars per correct", startQuizTxt:"Start Quiz",
    resStarLabel:"stars earned!",
    resTitle:{100:"Perfect score!",75:"Well done!",0:"Keep going!"},
    resMsg:"You got {s} out of {t} correct.",
    resHomeTxt:"Home",
    gamesTitle:{"tiny":"🎮 Games","mid":"🎮 Games","big":"🧩 Puzzles"},
    animalHomesTitle:"Animal Homes", dragDropLabel:"Drag & Drop", animalHomesDesc:"Drag each animal to its home!",
    numTapTitle:"Number Tap", numTapDesc:"Tap numbers 1 to 9 in order!",
    numTapFirst:"Tap 1 first!", numNextMsg:"Now tap {n}!", numDoneMsg:"All done! +5 stars 🎉",
    dragDoneMsg:"🎉 All matched! +8 stars", memMatchTitle:"Memory Match", findPairsLabel:"Find the pairs",
    memMatchDesc:"Flip cards to find matching pairs!", pairTapMsg:"Tap a card to flip!",
    movesLabel:"Moves:", newGameTxt:"New game",
    pairDoneMsg:"All pairs found! +10 stars 🎉",
    wordScrambleTitle:"Word Scramble", sciWordsLabel:"Science words", wordScrambleDesc:"Unscramble the science word!",
    hintLabel:"Hint:", clearTxt:"Clear", nextWordTxt:"Next word",
    scrambleCorrect:"Correct! +8 stars 🎉", scrambleWrong:"Not quite! The word was: ",
    rewardsTitle:"🏆 My Rewards", totalStarsLabel:"total stars collected",
    nextBadgeLabel:"Next badge at 30 stars", badgesTitle:"Badges",
    earnOfflineTitle:"Earn stars offline!", earnOfflineSub:"Complete real-world activities to claim bonus stars.",
    claimBtn:"Claim", doneLabel:"Done!",
    nav:{home:"Home",stories:"Stories",quiz:"Quiz",games:"Games",rewards:"Rewards"},
    lockTitle:"Screen time is up!", lockMsg:"Great learning today! Time for something fun in the real world.",
    lockChallengeLabel:"Your offline challenge:", lockParentBtnTxt:"Parent unlock", lockUnlockBtn:"Unlock", lockPinErr:"Wrong PIN!",
    breakTitle:"Quick break time!", breakSub:"Stand up, stretch, drink some water!", breakDoneBtn:"Done!",
    parentModalTitle:"🔐 Parent Settings", parentPinHint:"Enter parent PIN. Default: 1234",
    parentEnterBtn:"Enter", parentPinErrTxt:"Incorrect PIN.",
    tabStats:"Stats", tabLimits:"Limits", tabOffline:"Offline",
    pTimeLabel:"Screen time today", pStarsLabel:"Stars earned", pStoriesLabel:"Stories read", pQuizLabel:"Quizzes done",
    pAgeGroupLabel:"Current age group:",
    dailyCapLabel:"Daily screen time cap", breakEveryLabel:"Break reminder every",
    saveSettingsBtn:"Save settings ✓", offlineMgmtDesc:"Children claim stars after these activities.",
    settingsSaved:"Settings saved! Daily limit: {t} min, Break every: {b} min.",
    finishStoryMsg:"Great reading! +5 stars ⭐",
    badge1:"Story Star",badge2:"Quiz Pro",badge3:"Game Hero",badge4:"Super Kid",badge5:"Bookworm",badge6:"Explorer",badge7:"Thinker",badge8:"Rainbow",
    resetTxt:"Reset", resetTxt2:"Reset",
    offlineChallenges:["Read a real book for a while!","Draw something creative!","Play outside!","Help someone at home!","Tell a family member what you learned!"]
  },
  ml:{
    selTitle:"🌟 വണ്ടർലാൻഡ്", selSub:"നിങ്ങളുടെ പ്രായം തിരഞ്ഞെടുക്കൂ!",
    tinyRange:"3 – 5 വയസ്സ്", tinyLabel:"കൊച്ചു മക്കൾ", tinyDesc:"വലിയ ചിത്രങ്ങൾ · ലളിതമായ കളികൾ",
    midRange:"6 – 9 വയസ്സ്", midLabel:"ചെറിയ പര്യവേഷകർ", midDesc:"കഥകൾ · ക്വിസ് · മെമ്മറി ഗെയിം",
    bigRange:"10 – 13 വയസ്സ്", bigLabel:"യുവ ചിന്തകർ", bigDesc:"അധ്യായ കഥകൾ · ശാസ്ത്ര ക്വിസ് · പദ പസിൽ",
    selParentLink:"🔐 രക്ഷിതാവിന്റെ ക്രമീകരണങ്ങൾ",
    backAge:"പ്രായം", logoSuffix:"വണ്ടർലാൻഡ്",
    homeGreet:{"tiny":"ഹലോ, കൊച്ചുമോനെ! 👋","mid":"ഹലോ, പര്യവേഷകാ! 👋","big":"ഹലോ, ചിന്തകാ! 👋"},
    homeTitle:{"tiny":"നമുക്ക് കളിക്കാം, പഠിക്കാം!","mid":"ഇന്ന് എന്ത് പഠിക്കണം?","big":"ചിന്തിക്കാൻ തയ്യാറോ?"},
    homeProgressLabel:"ഇന്നത്തെ യാത്ര", homeProgLbl:"0 / 4 പൂർത്തിയായി",
    homeParentBtnTxt:"രക്ഷിതാവ് സോൺ",
    storiesTitle:{"tiny":"📚 കഥകൾ","mid":"📚 കഥകൾ","big":"📗 വായന"},
    readerBackTxt:"ലൈബ്രറി", prevBtnTxt:"മുൻപ്", nextBtnTxt:"അടുത്തത്", finishTxt:"പൂർത്തിയായി ✓", readAloudTxt:"ഉറക്കെ വായിക്കൂ",
    quizIntroTitle:{"tiny":"രസകരമായ ക്വിസ്! 🌟","mid":"കഥ ക്വിസ്! 📖","big":"ശാസ്ത്ര ക്വിസ്! 🔬"},
    quizIntroSub:"ചോദ്യങ്ങൾക്ക് ഉത്തരം നൽകി നക്ഷത്രങ്ങൾ നേടൂ!",
    quizStarLabel:"ശരിയുത്തരത്തിന് +5 നക്ഷത്രം", startQuizTxt:"ക്വിസ് തുടങ്ങൂ",
    resStarLabel:"നക്ഷത്രങ്ങൾ നേടി!",
    resTitle:{100:"മികച്ച സ്കോർ!",75:"നന്നായി!",0:"തുടരൂ!"},
    resMsg:"{t} ൽ {s} ശരിയായി.",
    resHomeTxt:"ഹോം",
    gamesTitle:{"tiny":"🎮 കളികൾ","mid":"🎮 കളികൾ","big":"🧩 പസിലുകൾ"},
    animalHomesTitle:"മൃഗങ്ങളുടെ വീടുകൾ", dragDropLabel:"വലിച്ചിടൂ", animalHomesDesc:"ഓരോ മൃഗത്തെ അതിന്റെ വീട്ടിലേക്ക് വലിക്കൂ!",
    numTapTitle:"നമ്പർ ടാപ്പ്", numTapDesc:"1 മുതൽ 9 വരെ ക്രമത്തിൽ ടാപ്പ് ചെയ്യൂ!",
    numTapFirst:"1 ആദ്യം ടാപ്പ് ചെയ്യൂ!", numNextMsg:"ഇനി {n} ടാപ്പ് ചെയ്യൂ!", numDoneMsg:"ഗംഭീരം! +5 നക്ഷത്രം 🎉",
    dragDoneMsg:"🎉 എല്ലാം ശരിയായി! +8 നക്ഷത്രം", memMatchTitle:"മെമ്മറി മാച്ച്", findPairsLabel:"ജോടി കണ്ടെത്തൂ",
    memMatchDesc:"ജോടി ചിത്രങ്ങൾ കണ്ടെത്തൂ!", pairTapMsg:"ഒരു കാർഡ് ടാപ്പ് ചെയ്യൂ!",
    movesLabel:"നീക്കങ്ങൾ:", newGameTxt:"പുതിയ ഗെയിം",
    pairDoneMsg:"എല്ലാ ജോടിയും കണ്ടെത്തി! +10 നക്ഷത്രം 🎉",
    wordScrambleTitle:"വാക്ക് ശ്രേണി", sciWordsLabel:"ശാസ്ത്ര വാക്കുകൾ", wordScrambleDesc:"ശാസ്ത്ര വാക്ക് ക്രമത്തിൽ ചേർക്കൂ!",
    hintLabel:"സൂചന:", clearTxt:"മായ്ക്കൂ", nextWordTxt:"അടുത്ത വാക്ക്",
    scrambleCorrect:"ശരിയായി! +8 നക്ഷത്രം 🎉", scrambleWrong:"ശരിയല്ല! വാക്ക്: ",
    rewardsTitle:"🏆 എന്റെ പ്രതിഫലങ്ങൾ", totalStarsLabel:"ആകെ നക്ഷത്രങ്ങൾ",
    nextBadgeLabel:"30 നക്ഷത്രത്തിൽ അടുത്ത ബാഡ്ജ്", badgesTitle:"ബാഡ്ജുകൾ",
    earnOfflineTitle:"ഓഫ്‌ലൈൻ ആയി നക്ഷത്രം നേടൂ!", earnOfflineSub:"ഈ പ്രവർത്തനങ്ങൾ ചെയ്ത് നക്ഷത്രങ്ങൾ ക്ലെയിം ചെയ്യൂ.",
    claimBtn:"ക്ലെയിം", doneLabel:"പൂർത്തിയായി!",
    nav:{home:"ഹോം",stories:"കഥകൾ",quiz:"ക്വിസ്",games:"കളി",rewards:"പ്രതിഫലം"},
    lockTitle:"സ്ക്രീൻ സമയം തീർന്നു!", lockMsg:"ഇന്ന് നന്നായി പഠിച്ചു! ഇനി ഓഫ്‌ലൈൻ കളി!",
    lockChallengeLabel:"ഓഫ്‌ലൈൻ ദൗത്യം:", lockParentBtnTxt:"രക്ഷിതാവ് അൺലോക്ക്", lockUnlockBtn:"അൺലോക്ക്", lockPinErr:"തെറ്റായ PIN!",
    breakTitle:"ഒരു ഇടവേള!", breakSub:"എഴുന്നേൽക്കൂ, നടക്കൂ, വെള്ളം കുടിക്കൂ!", breakDoneBtn:"ആയി!",
    parentModalTitle:"🔐 രക്ഷിതാവ് ക്രമീകരണങ്ങൾ", parentPinHint:"PIN നൽകൂ. ഡിഫോൾട്ട്: 1234",
    parentEnterBtn:"പ്രവേശിക്കൂ", parentPinErrTxt:"തെറ്റായ PIN.",
    tabStats:"സ്ഥിതിവിവരം", tabLimits:"പരിധി", tabOffline:"ഓഫ്‌ലൈൻ",
    pTimeLabel:"ഇന്നത്തെ സ്ക്രീൻ സമയം", pStarsLabel:"നേടിയ നക്ഷത്രങ്ങൾ", pStoriesLabel:"വായിച്ച കഥകൾ", pQuizLabel:"ചെയ്ത ക്വിസ്",
    pAgeGroupLabel:"ഇപ്പോഴത്തെ പ്രായ ഗ്രൂപ്പ്:",
    dailyCapLabel:"ദൈനിക സ്ക്രീൻ സമയ പരിധി", breakEveryLabel:"ഇടവേള ഓർമ്മപ്പെടുത്തൽ ഇടവേള",
    saveSettingsBtn:"ക്രമീകരണം സൂക്ഷിക്കൂ ✓", offlineMgmtDesc:"ഈ പ്രവർത്തനങ്ങൾ ചെയ്ത ശേഷം കുട്ടികൾ ക്ലെയിം ചെയ്യും.",
    settingsSaved:"സൂക്ഷിച്ചു! ദൈനിക സമയം: {t} മിനിറ്റ്, ഇടവേള: {b} മിനിറ്റ്.",
    finishStoryMsg:"മികച്ച വായന! +5 നക്ഷത്രം ⭐",
    badge1:"കഥ നക്ഷത്രം",badge2:"ക്വിസ് മിടുക്കൻ",badge3:"ഗെയിം ഹീറോ",badge4:"സൂപ്പർ കിഡ്",badge5:"ഗ്രന്ഥഭ്രാന്തൻ",badge6:"പര്യവേഷകൻ",badge7:"ചിന്തകൻ",badge8:"ഇന്ദ്രധനുസ്സ്",
    resetTxt:"പുനഃക്രമീകരിക്കൂ", resetTxt2:"പുനഃക്രമീകരിക്കൂ",
    offlineChallenges:["ഒരു പുസ്തകം വായിക്കൂ!","ഒരു ചിത്രം വരയ്ക്കൂ!","പുറത്ത് കളിക്കൂ!","വീട്ടിൽ സഹായിക്കൂ!","ഇന്ന് പഠിച്ചത് ആരോടെങ്കിലും പറയൂ!"]
  }
};

/* ══════════════════════════════════════════════════
   AGE-WISE CONTENT DATA
══════════════════════════════════════════════════ */
const STATIC_AGES = {
  tiny:{
    label_en:"Ages 3–5", label_ml:"3–5 വയസ്സ്",
    name_en:"Tiny Tots", name_ml:"കൊച്ചു മക്കൾ",
    cls:"age-tiny", logo_en:"🐣 WonderLand", logo_ml:"🐣 വണ്ടർലാൻഡ്",
    sessionMin:20, breakMin:8,
    pills_en:[{cls:"xp-orange",icon:"📖",txt:"Easy stories"},{cls:"xp-green",icon:"🎮",txt:"Fun games"}],
    pills_ml:[{cls:"xp-orange",icon:"📖",txt:"എളുപ്പ കഥകൾ"},{cls:"xp-green",icon:"🎮",txt:"രസകരമായ കളികൾ"}],
    modules_en:[
      {id:"stories",icon:"📖",bg:"#FFF3E0",bdr:"#FFD8B0",ico:"#FFE0B2",title:"Stories",sub:"Tap & listen"},
      {id:"quiz",icon:"❓",bg:"#E0F7FA",bdr:"#B2EBF2",ico:"#B2EBF2",title:"Quiz",sub:"3 questions"},
      {id:"games",icon:"🎮",bg:"#F3E8FF",bdr:"#E9D5FF",ico:"#E9D5FF",title:"Games",sub:"Drag & tap"},
      {id:"rewards",icon:"⭐",bg:"#FEF9C3",bdr:"#FDE68A",ico:"#FEF08A",title:"Stars",sub:"My rewards"}
    ],
    modules_ml:[
      {id:"stories",icon:"📖",bg:"#FFF3E0",bdr:"#FFD8B0",ico:"#FFE0B2",title:"കഥകൾ",sub:"ടാപ്പ് & കേൾക്കൂ"},
      {id:"quiz",icon:"❓",bg:"#E0F7FA",bdr:"#B2EBF2",ico:"#B2EBF2",title:"ക്വിസ്",sub:"3 ചോദ്യങ്ങൾ"},
      {id:"games",icon:"🎮",bg:"#F3E8FF",bdr:"#E9D5FF",ico:"#E9D5FF",title:"കളികൾ",sub:"വലിക്കൂ & ടാപ്പ്"},
      {id:"rewards",icon:"⭐",bg:"#FEF9C3",bdr:"#FDE68A",ico:"#FEF08A",title:"നക്ഷത്രങ്ങൾ",sub:"എന്റെ പ്രതിഫലം"}
    ],
    stories_en:[
      {emoji:"🐣",bg:"#FFF3E0",title:"The Lost Baby Chick",pages:["Once there was a fluffy yellow chick named Pip who got lost in the big green meadow. He looked left, he looked right, but he could not find his mummy!","Pip met a kind cow. 'Have you seen my mummy?' he asked. 'No,' said the cow, 'but I will help you look!' Then a duck joined too, and then a lamb.","Suddenly Pip heard a familiar cluck-cluck sound. There was Mama Hen running towards him! She gave Pip a big warm hug. 'Never wander too far!' she said with love."]},
      {emoji:"🐸",bg:"#E8F5E9",title:"Froggy Learns to Jump",pages:["Froggy was a tiny green frog who was afraid to jump. All his frog friends could leap from lily pad to lily pad, but Froggy always stayed still.","'What if I fall?' said Froggy. His friend Lily the dragonfly said, 'What if you FLY?' That made Froggy smile. He bent his little legs and — BOING!","Froggy landed safely on the next lily pad! He laughed with joy and jumped again and again. 'Trying is the first step to doing,' said Grandpa Frog proudly."]}
    ],
    stories_ml:[
      {emoji:"🐣",bg:"#FFF3E0",title:"കാണാതായ കൊച്ചു കുഞ്ഞ്",pages:["ഒരിക്കൽ, ഒരു മഞ്ഞ ഇറകുള്ള കൊച്ചു കുഞ്ഞ് 'പിപ്' വലിയ പുൽമൈദാനിൽ വഴിതെറ്റി. അവൻ ഇടത്തോ, വലത്തോ നോക്കി, പക്ഷേ അമ്മയെ കണ്ടില്ല!","പിപ്പ് ദയയുള്ള ഒരു പശുവിനെ കണ്ടു. 'അമ്മയെ കണ്ടോ?' എന്ന് ചോദിച്ചു. 'ഇല്ല, പക്ഷേ ഞാൻ സഹായിക്കാം!' പശു പറഞ്ഞു. പിന്നെ ഒരു താറാവും ഒരു ആടും കൂടി.","പെട്ടെന്ന് പിപ്പ് ഒരു ശബ്ദം കേട്ടു. അമ്മ ഓടി വരുന്നു! അവൾ പിപ്പിനെ കെട്ടിപ്പിടിച്ചു. 'ഇനി ഒറ്റക്ക് പോകരുത്!' എന്ന് സ്നേഹത്തോടെ പറഞ്ഞു."]},
      {emoji:"🐸",bg:"#E8F5E9",title:"തവള ചാടാൻ പഠിക്കുന്നു",pages:["ചെറിയ തവള 'ഫ്രോഗ്ഗി' ചാടാൻ ഭയമായിരുന്നു. കൂട്ടുകാർ എല്ലാവരും ചാടി ഓടി, പക്ഷേ ഫ്രോഗ്ഗി അനങ്ങാതെ നിന്നു.","'ഞാൻ വീണാലോ?' ഫ്രോഗ്ഗി ചോദിച്ചു. 'നീ പറന്നാലോ?' കൂട്ടുകാരി ലില്ലി ചോദിച്ചു. ഫ്രോഗ്ഗി ചിരിച്ചു — ബോങ്!","ഫ്രോഗ്ഗി ഇലയിൽ ഇറങ്ങി! ആർത്ത് ചിരിച്ചു, ആനന്ദിച്ചു. 'ശ്രമിക്കുക — അതാണ് ആദ്യ ചുവട്' — തൊടത്ത ഫ്രോഗ് പറഞ്ഞു."]}
    ],
    quiz_en:[
      {q:"What animal was lost?",opts:["A bunny","A baby chick","A puppy","A kitten"],ans:1},
      {q:"Who helped Pip first?",opts:["A horse","A dog","A cow","A sheep"],ans:2},
      {q:"What was Froggy afraid of?",opts:["Water","Jumping","Birds","The dark"],ans:1},
      {q:"What did Froggy's friend say?",opts:["Run away!","What if you FLY?","Stay still!","Go home!"],ans:1}
    ],
    quiz_ml:[
      {q:"ആര് വഴിതെറ്റി?",opts:["ഒരു മുയൽ","ഒരു കൊച്ചു കുഞ്ഞ്","ഒരു നായ","ഒരു പൂച്ചക്കുഞ്ഞ്"],ans:1},
      {q:"ആദ്യം ആരു സഹായിച്ചു?",opts:["ഒരു കുതിര","ഒരു നായ","ഒരു പശു","ഒരു ആട്"],ans:2},
      {q:"ഫ്രോഗ്ഗിക്ക് എന്തിനോടായിരുന്നു ഭയം?",opts:["വെള്ളം","ചാടൽ","പക്ഷികൾ","ഇരുട്ട്"],ans:1},
      {q:"ഫ്രോഗ്ഗിയുടെ കൂട്ടുകാരി എന്ത് ചോദിച്ചു?",opts:["ഓടി പോ!","നീ പറന്നാലോ?","അനങ്ങരുത്!","വീട്ടിൽ പോ!"],ans:1}
    ],
    offline_en:[{icon:"📖",txt:"Ask someone to read you a book",stars:8,done:false},{icon:"🎨",txt:"Colour a picture",stars:6,done:false},{icon:"🌿",txt:"Play outside for 10 minutes",stars:10,done:false},{icon:"🤝",txt:"Help tidy your toys",stars:8,done:false}],
    offline_ml:[{icon:"📖",txt:"ആരോടെങ്കിലും ഒരു പുസ്തകം വായിക്കാൻ ആവശ്യപ്പെടൂ",stars:8,done:false},{icon:"🎨",txt:"ഒരു ചിത്രം വർണ്ണം നൽകൂ",stars:6,done:false},{icon:"🌿",txt:"10 മിനിറ്റ് പുറത്ത് കളിക്കൂ",stars:10,done:false},{icon:"🤝",txt:"കളിപ്പാട്ടങ്ങൾ ഒതുക്കൂ",stars:8,done:false}]
  },
  mid:{
    label_en:"Ages 6–9", label_ml:"6–9 വയസ്സ്",
    name_en:"Little Explorers", name_ml:"ചെറിയ പര്യവേഷകർ",
    cls:"age-mid", logo_en:"🚀 WonderLand", logo_ml:"🚀 വണ്ടർലാൻഡ്",
    sessionMin:30, breakMin:10,
    pills_en:[{cls:"xp-blue",icon:"📚",txt:"2 stories waiting"},{cls:"xp-amber",icon:"🧠",txt:"Quiz pending"}],
    pills_ml:[{cls:"xp-blue",icon:"📚",txt:"2 കഥകൾ കാത്തിരിക്കുന്നു"},{cls:"xp-amber",icon:"🧠",txt:"ക്വിസ് ബാക്കിയുണ്ട്"}],
    modules_en:[
      {id:"stories",icon:"📚",bg:"#EFF6FF",bdr:"#BFDBFE",ico:"#BFDBFE",title:"Stories",sub:"3 tales await"},
      {id:"quiz",icon:"🧠",bg:"#ECFDF5",bdr:"#A7F3D0",ico:"#A7F3D0",title:"Quiz",sub:"Test yourself"},
      {id:"games",icon:"🎮",bg:"#FDF4FF",bdr:"#E9D5FF",ico:"#E9D5FF",title:"Games",sub:"Play & learn"},
      {id:"rewards",icon:"🏆",bg:"#FFFBEB",bdr:"#FDE68A",ico:"#FEF08A",title:"Rewards",sub:"My stars"}
    ],
    modules_ml:[
      {id:"stories",icon:"📚",bg:"#EFF6FF",bdr:"#BFDBFE",ico:"#BFDBFE",title:"കഥകൾ",sub:"3 കഥകൾ കാക്കുന്നു"},
      {id:"quiz",icon:"🧠",bg:"#ECFDF5",bdr:"#A7F3D0",ico:"#A7F3D0",title:"ക്വിസ്",sub:"നിന്നെ പരിശോധിക്കൂ"},
      {id:"games",icon:"🎮",bg:"#FDF4FF",bdr:"#E9D5FF",ico:"#E9D5FF",title:"കളികൾ",sub:"കളിക്കൂ & പഠിക്കൂ"},
      {id:"rewards",icon:"🏆",bg:"#FFFBEB",bdr:"#FDE68A",ico:"#FEF08A",title:"പ്രതിഫലം",sub:"എന്റെ നക്ഷത്രം"}
    ],
    stories_en:[
      {emoji:"🐢",bg:"#EDE9FE",title:"The Brave Little Turtle",pages:["In a sunny meadow lived a small turtle named Timo. All the other animals could run fast and jump high, but Timo was always slow — very, very slow.","One morning a speedy hare named Hazel challenged Timo to a race to the old oak tree. Everyone gathered to watch. Timo accepted calmly.","Hazel dashed ahead and decided to nap under a tree. Timo walked steadily on. When Hazel woke up, Timo had already crossed the finish line! 'Slow and steady wins the race,' Timo said."]},
      {emoji:"🌙",bg:"#FDF2F8",title:"Luna and the Stars",pages:["Luna loved nights more than days. Every evening she climbed onto the roof and gazed at the sparkling sky. She kept a notebook full of star drawings.","One magical night a tiny star drifted down to her. 'Would you like to see the sky up close?' it whispered. Before she knew it, they were soaring through the clouds!","Together they flew past the silver moon and Saturn's rings. When Luna returned home, she knew every star was a story waiting to be discovered."]}
    ],
    stories_ml:[
      {emoji:"🐢",bg:"#EDE9FE",title:"ധൈര്യശാലിയായ കൊച്ചു ആമ",pages:["ഒരു സൂര്യ‍നിലമ്പ്‍ കാടിൽ ടിമോ എന്ന കൊച്ചു ആമ ജീവിച്ചിരുന്നു. മറ്റ് മൃഗങ്ങൾ ഓടി ചാടി, പക്ഷേ ടിമോ എന്നും സാവകാശം നടന്നു.","ഒരു ദിവസം, ഹേസൽ എന്ന മുയൽ ടിമോവിനോട് ഒരു ഓട്ടം മത്സരത്തിന് ക്ഷണിച്ചു. ടിമോ സ്വസ്ഥമായി സ്വീകരിച്ചു. എല്ലാവരും കാണാൻ വന്നു.","ഹേസൽ ഓടി ഒരു മരത്തിനടിയിൽ ഉറങ്ങി. ടിമോ ഒടുക്കം ഓടി ഗോൾ ലൈൻ കടന്നു! 'ക്രമേണ ജയം' — ടിമോ പറഞ്ഞു."]},
      {emoji:"🌙",bg:"#FDF2F8",title:"ലൂണ ആൻഡ് ദ സ്റ്റാർസ്",pages:["ലൂണ രാത്രി ഇഷ്ടപ്പെട്ടു. ഓരോ വൈകുന്നേരവും അവൾ ടെറസിൽ കേറി ആകാശം നോക്കിക്കൊണ്ടിരുന്നു. ഒരു നക്ഷത്ര ഡ്രോയിംഗ് ബുക്ക് അവൾ സൂക്ഷിച്ചിരുന്നു.","ഒരു ദിവസം ഒരു കൊച്ചു നക്ഷത്രം ഇറങ്ങി വന്നു. 'ആകാശം അടുത്ത് കാണണോ?' എന്ന് ചോദിച്ചു. ലൂണ അതോടൊപ്പം മേഘങ്ങൾ കടന്ന് ഓടി!","ചന്ദ്രനും ശനിഗ്രഹ വലയവും കടന്ന് അവർ ഒന്നിച്ചു. ലൂണ തിരിച്ചെത്തി — 'ഓരോ നക്ഷത്രവും ഒരു കഥ' — അവൾ ഡയറിയിൽ എഴുതി."]}
    ],
    quiz_en:[
      {q:"What was Timo the turtle's challenge?",opts:["Swim across the lake","Race to the old oak tree","Climb the tallest hill","Cross the river"],ans:1},
      {q:"Why did Hazel the hare lose?",opts:["She hurt her leg","She got lost","She stopped to nap","She gave up"],ans:2},
      {q:"What lesson did Timo teach?",opts:["Fast always wins","Slow and steady wins the race","Turtles are the best","Friends help each other"],ans:1},
      {q:"What did Luna keep in her notebook?",opts:["Recipes","Poems","Star drawings","Shopping lists"],ans:2}
    ],
    quiz_ml:[
      {q:"ടിമോ ആമക്ക് ഉണ്ടായ വെല്ലുവിളി എന്ത്?",opts:["തടാകം നീന്തുക","ഓക്ക് മരത്തിലേക്ക് ഓടുക","ഏറ്റവും ഉയരമുള്ള കുന്ന് കേറുക","നദി കടക്കുക"],ans:1},
      {q:"ഹേസൽ മുയൽ എന്തുകൊണ്ടു തോറ്റു?",opts:["കാല് വേദനിച്ചു","വഴി തെറ്റി","ഉറക്കം ആയി","മടുത്ത് വിട്ടു"],ans:2},
      {q:"ടിമോ നൽകിയ പാഠം?",opts:["വേഗം ജയിക്കും","ക്രമേണ ജയം","ആമ ഏറ്റവും നല്ലത്","കൂട്ടുകാർ സഹായിക്കും"],ans:1},
      {q:"ലൂണ ഡയറിയിൽ എന്ത് ഇട്ടു?",opts:["റെസിപ്പി","കവിത","നക്ഷത്ര ചിത്രങ്ങൾ","ഷോപ്പിംഗ് ലിസ്റ്റ്"],ans:2}
    ],
    offline_en:[{icon:"📖",txt:"Read a book for 15 minutes",stars:10,done:false},{icon:"✏️",txt:"Draw your favourite animal",stars:8,done:false},{icon:"🚶",txt:"Walk outside for 15 minutes",stars:12,done:false},{icon:"🧩",txt:"Complete a puzzle",stars:8,done:false},{icon:"🤝",txt:"Help with a chore at home",stars:15,done:false}],
    offline_ml:[{icon:"📖",txt:"15 മിനിറ്റ് ഒരു പുസ്തകം വായിക്കൂ",stars:10,done:false},{icon:"✏️",txt:"ഇഷ്ട മൃഗത്തെ വരയ്ക്കൂ",stars:8,done:false},{icon:"🚶",txt:"15 മിനിറ്റ് പുറത്ത് നടക്കൂ",stars:12,done:false},{icon:"🧩",txt:"ഒരു പസ്സിൽ പൂർത്തിയാക്കൂ",stars:8,done:false},{icon:"🤝",txt:"വീടിലെ ഒരു ജോലി ചെയ്യൂ",stars:15,done:false}]
  },
  big:{
    label_en:"Ages 10–13", label_ml:"10–13 വയസ്സ്",
    name_en:"Young Thinkers", name_ml:"യുവ ചിന്തകർ",
    cls:"age-big", logo_en:"🔬 WonderLand", logo_ml:"🔬 വണ്ടർലാൻഡ്",
    sessionMin:45, breakMin:15,
    pills_en:[{cls:"xp-blue",icon:"📗",txt:"2 chapters ready"},{cls:"xp-teal",icon:"🔬",txt:"Science quiz"}],
    pills_ml:[{cls:"xp-blue",icon:"📗",txt:"2 അധ്യായങ്ങൾ ഉണ്ട്"},{cls:"xp-teal",icon:"🔬",txt:"ശാസ്ത്ര ക്വിസ്"}],
    modules_en:[
      {id:"stories",icon:"📗",bg:"#EFF6FF",bdr:"#93C5FD",ico:"#BFDBFE",title:"Reading",sub:"Chapter stories"},
      {id:"quiz",icon:"🔬",bg:"#F0FDF4",bdr:"#86EFAC",ico:"#BBF7D0",title:"Science Quiz",sub:"Level up"},
      {id:"games",icon:"🧩",bg:"#FDF4FF",bdr:"#D8B4FE",ico:"#E9D5FF",title:"Puzzles",sub:"Word & number"},
      {id:"rewards",icon:"🏅",bg:"#FFFBEB",bdr:"#FCD34D",ico:"#FEF08A",title:"Achievements",sub:"Track progress"}
    ],
    modules_ml:[
      {id:"stories",icon:"📗",bg:"#EFF6FF",bdr:"#93C5FD",ico:"#BFDBFE",title:"വായന",sub:"അധ്യായ കഥകൾ"},
      {id:"quiz",icon:"🔬",bg:"#F0FDF4",bdr:"#86EFAC",ico:"#BBF7D0",title:"ശാസ്ത്ര ക്വിസ്",sub:"ലെവൽ അപ്പ്"},
      {id:"games",icon:"🧩",bg:"#FDF4FF",bdr:"#D8B4FE",ico:"#E9D5FF",title:"പസ്സിലുകൾ",sub:"വാക്ക് & നമ്പർ"},
      {id:"rewards",icon:"🏅",bg:"#FFFBEB",bdr:"#FCD34D",ico:"#FEF08A",title:"നേട്ടങ്ങൾ",sub:"പ്രോഗ്രസ് ട്രാക്ക്"}
    ],
    stories_en:[
      {emoji:"🌊",bg:"#EFF6FF",title:"The Ocean's Secret",pages:["Sixteen-year-old Mia never thought a school marine biology trip would change her life. Standing on the research boat, she watched dolphins leaping in the turquoise water off the Kerala coast.","Professor Ravi pointed to a glowing patch below. 'Bioluminescence,' he explained. 'Millions of tiny organisms producing their own light.' Mia lowered a sample jar and lifted up a world of cold blue fire.","Back at the lab, Mia mapped the organisms under a microscope. Each tiny cell pulsed with its own rhythm. She wrote in her field journal: 'The ocean doesn't hide secrets — it waits for curious minds.'"]},
      {emoji:"🛰️",bg:"#EEF2FF",title:"Signal from Space",pages:["Arjun adjusted the radio telescope controls at his school's astronomy club. They had been assigned a patch of sky near Orion to monitor for unusual radio frequencies.","At 11:47 pm, a pattern appeared — repeating pulses, precisely spaced. Arjun's hands shook as he checked for interference. Nothing explained it. He saved the data and emailed Dr. Krishnan.","Dr. Krishnan arrived at dawn. 'It's likely a pulsar — a spinning neutron star,' she said. But she smiled at Arjun. 'The thrill of not knowing yet? That's what drives every scientist. Well done.'"]}
    ],
    stories_ml:[
      {emoji:"🌊",bg:"#EFF6FF",title:"സമുദ്രത്തിന്റെ രഹസ്യം",pages:["16 വയസ്സായ മിയ ഒരു സ്കൂൾ സമുദ്ര യാത്ര ഒരിക്കലും ഇങ്ങനെ ആകുമെന്ന് കരുതിയില്ല. കേരള തീരക്കടലിൽ, ഡോൾഫിനുകൾ ചാടുന്നത് അവൾ കണ്ടു.","പ്രൊഫ. രവി ഒരു തിളങ്ങുന്ന ഭാഗം ചൂണ്ടിക്കാണിച്ചു. 'ബയോലൂമിനെസ്സൻസ്' — ചെറിയ ജീവികൾ സ്വന്തം വെളിച്ചം ഉണ്ടാക്കുന്നു. മിയ ഒരു ഭരണി ഇറക്കി ആ നീലനിറ അഗ്നി പൊക്കി.","ലാബിൽ, മൈക്രോസ്കോപ്പ് ഉപയോഗിച്ച് മിയ ഓരോ ജീവിയെ കണ്ടെത്തി. 'സമുദ്രം രഹസ്യം ഒളിക്കുന്നില്ല — ആകുലതയുള്ള മനസ്സ് വേണം' — അവൾ ഡയറിയിൽ എഴുതി."]},
      {emoji:"🛰️",bg:"#EEF2FF",title:"ബഹിരാകാശ സന്ദേശം",pages:["ആർജ്ജുൻ ജ്യോതിശ്ശാസ്ത്ര ക്ലബ്ബിൽ ടെലിസ്കോപ്പ് ക്രമീകരിക്കുകയായിരുന്നു. ഒറിയോൺ നക്ഷത്രരാശിക്ക് അടുത്ത് ആകാശം നിരീക്ഷിക്കുകയായിരുന്നു.","11:47 ന് ഒരു ആവർത്തന സൂചന ദൃശ്യമായി. ആർജ്ജുൻ ഡേറ്റ സൂക്ഷിച്ച് ഡോ. കൃഷ്ണൻ ഡോക്ടറിന് ഇ-മെയിൽ അയച്ചു.","ഡോ. കൃഷ്ണൻ വന്നു. 'ഒരു പൾസർ ആകണം — ഒരു ഭ്രമണം ചെയ്യുന്ന ന്യൂട്രോൺ നക്ഷത്രം.' അവർ ആർജ്ജുൻ‌നോട് ചിരിച്ചു. 'അറിയില്ലെന്ന ആ ആവേശം — അതാണ് ശാസ്ത്രം.'"]}
    ],
    quiz_en:[
      {q:"What is bioluminescence?",opts:["Light produced by the sun under water","Light produced by living organisms","Reflection of moonlight on water","A type of coral reef"],ans:1},
      {q:"What tool did Mia use to study the organisms?",opts:["Telescope","Spectrometer","Microscope","Periscope"],ans:2},
      {q:"What did Arjun detect on the radio telescope?",opts:["A comet","Repeating radio pulses","Solar flares","Satellite signals"],ans:1},
      {q:"What was the likely source of Arjun's signal?",opts:["An alien spacecraft","A weather satellite","A pulsar — spinning neutron star","A black hole"],ans:2}
    ],
    quiz_ml:[
      {q:"ബയോലൂമിനെസ്സൻസ് എന്നാൽ?",opts:["സൂര്യൻ ജലത്തിനടിൽ ഉണ്ടാക്കുന്ന വെളിച്ചം","ജീവജാലങ്ങൾ ഉണ്ടാക്കുന്ന വെളിച്ചം","ചന്ദ്ര പ്രകാശം","ഒരു ഇനം കൊറൽ"],ans:1},
      {q:"മിയ ഏത് ഉപകരണം ഉപയോഗിച്ചു?",opts:["ടെലിസ്കോപ്പ്","സ്പെക്ട്രോമീറ്റർ","മൈക്രോസ്കോപ്പ്","പെരിസ്കോപ്പ്"],ans:2},
      {q:"ആർജ്ജുൻ എന്ത് കണ്ടെത്തി?",opts:["ഒരു ധൂമകേതു","ആവർത്തന റേഡിയോ സൂചനകൾ","സൗരജ്വാല","ഉപഗ്രഹ സൂചനകൾ"],ans:1},
      {q:"ആ സൂചനയുടെ ഉറവിടം?",opts:["ഒരു ഏലിയൻ കപ്പൽ","ഒരു കാലാവസ്ഥ ഉപഗ്രഹം","ഒരു പൾസർ — ന്യൂട്രോൺ നക്ഷത്രം","ഒരു ബ്ലാക്ക് ഹോൾ"],ans:2}
    ],
    offline_en:[{icon:"📖",txt:"Read a chapter of any book",stars:12,done:false},{icon:"📓",txt:"Write 3 facts you learned today",stars:10,done:false},{icon:"🌿",txt:"Spend 20 minutes in nature",stars:12,done:false},{icon:"🧪",txt:"Try a simple science experiment",stars:18,done:false},{icon:"🤝",txt:"Teach something to a younger sibling",stars:15,done:false}],
    offline_ml:[{icon:"📖",txt:"ഒരു പുസ്തകത്തിന്റെ ഒരു അധ്യായം വായിക്കൂ",stars:12,done:false},{icon:"📓",txt:"ഇന്ന് പഠിച്ച 3 കാര്യം എഴുതൂ",stars:10,done:false},{icon:"🌿",txt:"20 മിനിറ്റ് പ്രകൃതിയിൽ ചിലവഴിക്കൂ",stars:12,done:false},{icon:"🧪",txt:"ഒരു ലളിതമായ ശാസ്ത്ര പരീക്ഷണം ചെയ്യൂ",stars:18,done:false},{icon:"🤝",txt:"ഒരു ചെറിയ കൂട്ടക്കാരന് എന്തെങ്കിലും പഠിപ്പിക്കൂ",stars:15,done:false}]
  }
};
const T = deepMerge(JSON.parse(JSON.stringify(STATIC_T)), (window.APP_DATA && window.APP_DATA.T) || {});
const AGES = deepMerge(JSON.parse(JSON.stringify(STATIC_AGES)), (window.APP_DATA && window.APP_DATA.AGES) || {});

const ANIMALS=[{e:"🐠",home_en:"Ocean",home_ml:"കടൽ",id:"fish"},{e:"🦁",home_en:"Jungle",home_ml:"കാട്",id:"lion"},{e:"🐧",home_en:"Arctic",home_ml:"ആർക്ടിക്",id:"penguin"},{e:"🐝",home_en:"Garden",home_ml:"തോട്ടം",id:"bee"}];
const SCRAMBLES=[
  {word:"GRAVITY",hint_en:"The force that pulls things to the ground",hint_ml:"വസ്തുക്കളെ നിലത്തേക്ക് വലിക്കുന്ന ശക്തി"},
  {word:"OXYGEN",hint_en:"The gas we breathe",hint_ml:"നാം ശ്വസിക്കുന്ന വാതകം"},
  {word:"PHOTON",hint_en:"A particle of light",hint_ml:"പ്രകാശ കണം"},
  {word:"NUCLEUS",hint_en:"The centre of an atom",hint_ml:"ആറ്റത്തിന്റെ കേന്ദ്രം"},
  {word:"CLIMATE",hint_en:"Long-term weather patterns",hint_ml:"ദീർഘകാല കാലാവസ്ഥ"},
  {word:"EROSION",hint_en:"Wearing away of rock by wind and water",hint_ml:"കാറ്റ്, ജലം എന്നിവ മൂലം കല്ല് ദ്രവിക്കൽ"}
];
const PAIR_ITEMS=['🍎','🍎','🚀','🚀','🌈','🌈','⚡','⚡','🐬','🐬','🦋','🦋','🌍','🌍','🎵','🎵'];

/* ══ STATE ══ */
let currentAge=null,ageData=null,lang='en';
let stars=0,timerSec=0,sessionSec=0,timeLimitSec=0,breakInterval=0,breakTimer=0,timerRunning=false;
let curStory=0,curPage=0,curQ=0,quizScore=0;
let dragSrc=null,pairFlipped=[],pairLocked=false,pairMoves=0;
let scrambleWords=[],scrambleIdx=0,scrambleCurrent=[],scrambleAnswer='',scrambleSelected=[];
let storiesCompleted=false,quizCompleted=false,gamesCompleted=false,rewardsVisited=false;
window.numNext1=1;window.numNext2=1;

/* ══ LANGUAGE ══ */
function setLang(l){
  lang=l;
  const t=T[l];
  // selector
  document.getElementById('selLangEN').classList.toggle('active',l==='en');
  document.getElementById('selLangML').classList.toggle('active',l==='ml');
  document.getElementById('appLangEN')&&document.getElementById('appLangEN').classList.toggle('active',l==='en');
  document.getElementById('appLangML')&&document.getElementById('appLangML').classList.toggle('active',l==='ml');
  // selector texts
  setText('selTitle',t.selTitle);setText('selSub',t.selSub);
  setText('tiny-range',t.tinyRange);setText('tiny-label',t.tinyLabel);setText('tiny-desc',t.tinyDesc);
  setText('mid-range',t.midRange);setText('mid-label',t.midLabel);setText('mid-desc',t.midDesc);
  setText('big-range',t.bigRange);setText('big-label',t.bigLabel);setText('big-desc',t.bigDesc);
  setText('selParentLink',t.selParentLink);
  // app UI
  setText('backAgeTxt',t.backAge);
  setText('breakTitle',t.breakTitle);setText('breakSub',t.breakSub);setText('breakDoneBtn',t.breakDoneBtn);
  setText('lockTitle',t.lockTitle);setText('lockMsg',t.lockMsg);setText('lockChallengeLabel',t.lockChallengeLabel);
  setText('lockParentBtnTxt',t.lockParentBtnTxt);setText('lockUnlockBtn',t.lockUnlockBtn);
  setText('nav-home-lbl',t.nav.home);setText('nav-stories-lbl',t.nav.stories);setText('nav-quiz-lbl',t.nav.quiz);setText('nav-games-lbl',t.nav.games);setText('nav-rewards-lbl',t.nav.rewards);
  setText('homeParentBtnTxt',t.homeParentBtnTxt);setText('homeProgressLabel',t.homeProgressLabel);setText('homeProgLbl',t.homeProgLbl);
  setText('readerBackTxt',t.readerBackTxt);setText('prevBtnTxt',t.prevBtnTxt);setText('nextBtnTxt',t.nextBtnTxt);setText('readAloudTxt',t.readAloudTxt);
  setText('quizStarLabel',t.quizStarLabel);setText('startQuizTxt',t.startQuizTxt);setText('resStarLabel',t.resStarLabel);setText('resHomeTxt',t.resHomeTxt);
  setText('animalHomesTitle',t.animalHomesTitle);setText('dragDropLabel',t.dragDropLabel);setText('animalHomesDesc',t.animalHomesDesc);
  setText('numTapTitle',t.numTapTitle);setText('numTapDesc',t.numTapDesc);
  setText('animalHomesTitle2',t.animalHomesTitle);setText('dragDropLabel2',t.dragDropLabel);setText('animalHomesDesc2',t.animalHomesDesc);
  setText('memMatchTitle',t.memMatchTitle);setText('findPairsLabel',t.findPairsLabel);setText('memMatchDesc',t.memMatchDesc);
  setText('movesLabel',t.movesLabel);setText('newGameTxt',t.newGameTxt);setText('resetTxt',t.resetTxt);setText('resetTxt2',t.resetTxt2);
  setText('wordScrambleTitle',t.wordScrambleTitle);setText('sciWordsLabel',t.sciWordsLabel);setText('wordScrambleDesc',t.wordScrambleDesc);
  setText('hintLabel',t.hintLabel);setText('clearTxt',t.clearTxt);setText('nextWordTxt',t.nextWordTxt);
  setText('numTapTitle2',t.numTapTitle);setText('numTapDesc2',t.numTapDesc);
  setText('rewardsTitle',t.rewardsTitle);setText('totalStarsLabel',t.totalStarsLabel);setText('nextBadgeLabel',t.nextBadgeLabel);
  setText('badgesTitle',t.badgesTitle);setText('earnOfflineTitle',t.earnOfflineTitle);setText('earnOfflineSub',t.earnOfflineSub);
  setText('badge1lbl',t.badge1);setText('badge2lbl',t.badge2);setText('badge3lbl',t.badge3);setText('badge4lbl',t.badge4);
  setText('badge5lbl',t.badge5);setText('badge6lbl',t.badge6);setText('badge7lbl',t.badge7);setText('badge8lbl',t.badge8);
  setText('parentModalTitle',t.parentModalTitle);setText('parentPinHint',t.parentPinHint);setText('parentEnterBtn',t.parentEnterBtn);
  setText('tabStats',t.tabStats);setText('tabLimits',t.tabLimits);setText('tabOffline',t.tabOffline);
  setText('pTimeLabel',t.pTimeLabel);setText('pStarsLabel',t.pStarsLabel);setText('pStoriesLabel',t.pStoriesLabel);setText('pQuizLabel',t.pQuizLabel);
  setText('pAgeGroupLabel',t.pAgeGroupLabel);setText('dailyCapLabel',t.dailyCapLabel);setText('breakEveryLabel',t.breakEveryLabel);
  setText('saveSettingsBtn',t.saveSettingsBtn);setText('offlineMgmtDesc',t.offlineMgmtDesc);
  document.documentElement.lang = l;
  document.body.classList.toggle('lang-ml', l==='ml');
  document.body.classList.toggle('lang-en', l==='en');
  // live rebuild if age is set
  if(currentAge){
    const a=AGES[currentAge];
    document.getElementById('logoTxt').textContent=l==='ml'?a.logo_ml:a.logo_en;
    document.getElementById('ageBadgeTxt').textContent=l==='ml'?a.label_ml:a.label_en;
    document.getElementById('homeGreet').textContent=t.homeGreet[currentAge];
    document.getElementById('homeTitle').textContent=t.homeTitle[currentAge];
    document.getElementById('storiesTitle').textContent=t.storiesTitle[currentAge];
    document.getElementById('gamesTitle').textContent=t.gamesTitle[currentAge];
    document.getElementById('rewardsTitle').textContent=t.rewardsTitle;
    document.getElementById('quizIntroTitle').textContent=t.quizIntroTitle[currentAge];
    document.getElementById('quizIntroSub').textContent=t.quizIntroSub;
    buildHome();
    if(document.getElementById('storyReader').style.display==='block') {
      refreshOpenStory();
    } else if(document.getElementById('storyList').style.display!=='none') {
      buildStoryList();
    }
    refreshQuizScreen();
    renderRewards();
  }
  updateProgress();
}
function setText(id,val){const el=document.getElementById(id);if(el)el.textContent=val;}

/* ══ AGE SELECT ══ */
function selectAge(age){
  currentAge=age;ageData=AGES[age];
  document.body.className=ageData.cls;
  document.body.classList.toggle('lang-ml', lang==='ml');
  document.body.classList.toggle('lang-en', lang==='en');
  document.getElementById('ageSelector').classList.add('hidden');
  document.getElementById('appShell').style.display='block';
  timeLimitSec=ageData.sessionMin*60;timerSec=timeLimitSec;
  breakInterval=ageData.breakMin*60;breakTimer=0;timerRunning=true;
  setLang(lang);
  buildHome();nav('home');
  if(!window._timerStarted){window._timerStarted=true;startTimer();}
  if(age==='big')buildScramble();
}

/* ══ BACK TO AGE ══ */
function goBackToAge(){
  timerRunning=false;window._timerStarted=false;
  stars=0;sessionSec=0;curQ=0;quizScore=0;pairFlipped=[];pairMoves=0;
  document.getElementById('appShell').style.display='none';
  document.getElementById('ageSelector').classList.remove('hidden');
  document.body.className='';
  currentAge=null;ageData=null;
}

/* ══ TIMER ══ */
function startTimer(){
  setInterval(()=>{
    if(!timerRunning)return;
    if(timerSec>0){timerSec--;sessionSec++;}
    const m=Math.floor(timerSec/60),s=timerSec%60;
    const d=document.getElementById('timerDisp');if(d)d.textContent=m+':'+(s<10?'0':'')+s;
    const p=document.getElementById('timerPill');if(p)p.className='timer-pill'+(timerSec<300?' warn':'');
    const pt=document.getElementById('pTime');if(pt)pt.textContent=Math.round(sessionSec/60)+' min';
    if(timerSec<=0)lockScreen();
    breakTimer++;
    if(breakTimer>=breakInterval){breakTimer=0;document.getElementById('breakBanner').classList.add('show');}
  },1000);
}
function lockScreen(){
  timerRunning=false;
  const msgs=T[lang].offlineChallenges;
  document.getElementById('lockChallengeTxt').textContent=msgs[Math.floor(Math.random()*msgs.length)];
  document.getElementById('lockPinBox').style.display='none';
  document.getElementById('lockPinErr').style.display='none';
  document.getElementById('lockPinInput').value='';
  document.getElementById('lockScreen').classList.add('show');
}
function showLockPin(){document.getElementById('lockPinBox').style.display='block';}
function tryLockUnlock(){
  if(document.getElementById('lockPinInput').value==='1234'){
    document.getElementById('lockScreen').classList.remove('show');timerSec=timeLimitSec;timerRunning=true;
  }else{document.getElementById('lockPinErr').style.display='block';}
}
function dismissBreak(){document.getElementById('breakBanner').classList.remove('show');breakTimer=0;}

/* ══ NAV ══ */
function nav(id){
  document.querySelectorAll('.screen').forEach(s=>s.classList.remove('active'));
  document.getElementById(id+'Screen').classList.add('active');
  document.querySelectorAll('.bnav-btn').forEach(b=>b.classList.remove('active'));
  const bn=document.getElementById('bn-'+id);if(bn)bn.classList.add('active');
  syncStars();
  if(id==='rewards'){rewardsVisited=true;renderRewards();}
  if(id==='games')initGames();
  if(id==='quiz'){
    document.getElementById('quizIntro').style.display='block';
    document.getElementById('quizQ').style.display='none';
    document.getElementById('quizResult').style.display='none';
    document.getElementById('quizIntroTitle').textContent=T[lang].quizIntroTitle[currentAge];
    document.getElementById('quizIntroSub').textContent=T[lang].quizIntroSub;
  }
  if(id==='stories')buildStoryList();
}

/* ══ HOME ══ */
function buildHome(){
  if(!ageData)return;
  const t=T[lang];
  document.getElementById('homeGreet').textContent=t.homeGreet[currentAge];
  document.getElementById('homeTitle').textContent=t.homeTitle[currentAge];
  const pills=document.getElementById('homePills');pills.innerHTML='';
  const pa=lang==='ml'?ageData.pills_ml:ageData.pills_en;
  pa.forEach(p=>{pills.innerHTML+=`<span class="xpill ${p.cls}">${p.icon} ${p.txt}</span>`;});
  const mod=document.getElementById('homeModules');mod.innerHTML='';
  const ma=lang==='ml'?ageData.modules_ml:ageData.modules_en;
  ma.forEach(m=>{
    mod.innerHTML+=`<div class="col-6"><div class="mod-card h-100" style="background:${m.bg};border-color:${m.bdr}" onclick="nav('${m.id}')"><div class="mod-icon" style="background:${m.ico}">${m.icon}</div><div class="mod-title">${m.title}</div><div class="mod-sub">${m.sub}</div></div></div>`;
  });
}

/* ══ STARS / PROGRESS ══ */
function addStars(n){stars+=n;syncStars();}
function syncStars(){
  document.getElementById('starCount').textContent=stars;
  const pd=document.getElementById('pStarsD');if(pd)pd.textContent=stars;
  const bs=document.getElementById('bigStarCount');if(bs)bs.textContent=stars;
  const sp=document.getElementById('starProg');if(sp)sp.style.width=Math.min(100,Math.round(stars/30*100))+'%';
  const pct=Math.min(100,Math.round(stars/50*100));
  const pb=document.getElementById('homeProgBar');if(pb)pb.style.width=pct+'%';
  const pp=document.getElementById('homePct');if(pp)pp.textContent=pct;
  updateProgress();
}

function updateProgress(){
  const completed = [storiesCompleted, quizCompleted, gamesCompleted, rewardsVisited].filter(Boolean).length;
  const lbl = lang === 'ml' ? `${completed} / 4 പൂർത്തിയായി` : `${completed} of 4 done`;
  const hl = document.getElementById('homeProgLbl');
  if(hl) hl.textContent = lbl;
}

function filterByAgeGroup(items, ageGroup){
  if (!ageGroup) return items;
  const ageGroupMap = {
    tiny: ['3-5'],
    mid: ['6-9'],
    big: ['10-14', '10-13'],
  };
  const allowedAgeGroups = ageGroupMap[ageGroup] || [ageGroup];
  return items.filter(item => !item.age_group || allowedAgeGroups.includes(item.age_group));
}
function normalizeStories(stories, language='en'){
  return stories.map(story=>{
    const title = story[`title_${language}`] || story.title || story.title_en || story.title_ml || 'Untitled Story';
    let pages = [];
    if (Array.isArray(story[`pages_${language}`]) && story[`pages_${language}`].length) {
      pages = story[`pages_${language}`].filter(p=>typeof p==='string' && p.trim().length>0);
    } else if (typeof story[`content_${language}`] === 'string' && story[`content_${language}`].trim().length) {
      pages = story[`content_${language}`].split(/\r?\n\s*\r?\n/).map(p=>p.trim()).filter(Boolean);
    } else if (Array.isArray(story.pages) && story.pages.length) {
      pages = story.pages.filter(p=>typeof p==='string' && p.trim().length>0);
    } else if (typeof story.content === 'string' && story.content.trim().length) {
      pages = story.content.split(/\r?\n\s*\r?\n/).map(p=>p.trim()).filter(Boolean);
    }
    if (!pages.length && typeof story.content === 'string' && story.content.trim().length) {
      pages = [story.content];
    }
    return {
      id: story.id ?? null,
      title,
      emoji: story.emoji || '📖',
      bg: story.bg || '#EFF6FF',
      pages: pages.length ? pages : [String(story.title || story.title_en || '')]
    };
  });
}
function normalizeQuizzes(quizzes, language='en'){
  return quizzes.map(quiz=>({
    id: quiz.id ?? null,
    title: quiz[`title_${language}`] || quiz.title || quiz.title_en || quiz.title_ml || 'Quiz',
    questions: (Array.isArray(quiz[`questions_${language}`]) && quiz[`questions_${language}`].length ? quiz[`questions_${language}`] : (Array.isArray(quiz.questions) ? quiz.questions : [])).map(item=>({
      q: item.question || item.q || '',
      opts: Array.isArray(item.options) ? item.options : (Array.isArray(item.opts) ? item.opts : []),
      ans: typeof item.correct === 'number' ? item.correct : (typeof item.ans === 'number' ? item.ans : 0)
    }))
  }));
}
function getStoryList(){
  if(window.APP_DATA && Array.isArray(window.APP_DATA.stories) && window.APP_DATA.stories.length){
    return normalizeStories(filterByAgeGroup(window.APP_DATA.stories, currentAge), lang);
  }
  return ageData ? normalizeStories(lang==='ml'?ageData.stories_ml:ageData.stories_en, lang) : [];
}
function getQuizList(){
  if(window.APP_DATA && Array.isArray(window.APP_DATA.quizzes) && window.APP_DATA.quizzes.length){
    return normalizeQuizzes(filterByAgeGroup(window.APP_DATA.quizzes, currentAge), lang);
  }
  return ageData ? normalizeQuizzes(lang==='ml'?ageData.quiz_ml:ageData.quiz_en, lang) : [];
}

/* ══ STORIES ══ */
function buildStoryList(){
  if(!ageData)return;
  document.getElementById('storiesTitle').textContent=T[lang].storiesTitle[currentAge];
  const list=document.getElementById('storyList');list.style.display='block';list.innerHTML='';
  document.getElementById('storyReader').style.display='none';
  const sa=getStoryList();
  const colors=[['xp-purple','xp-blue'],['xp-teal','xp-blue'],['xp-orange','xp-green'],['xp-blue','xp-purple']];
  sa.forEach((s,i)=>{
    list.innerHTML+=`<div class="story-item" onclick="openStory(${i})"><div style="font-size:2.2rem;width:46px;text-align:center">${s.emoji}</div><div style="flex:1"><div style="font-weight:800;font-size:.9rem;color:#111;margin-bottom:2px">${s.title}</div><div style="font-size:.72rem;color:#777;margin-bottom:.35rem">${s.pages.length} ${lang==='ml'?'പേജ്':'pages'}</div><div class="d-flex gap-1 flex-wrap"><span class="xpill ${colors[i % colors.length][0]}">${lang==='ml'?'കഥ':'Story'}</span><span class="xpill ${colors[i % colors.length][1]}">${s.pages.length} ${lang==='ml'?'പേജ്':'pages'}</span></div></div><i class="bi bi-chevron-right" style="color:#ccc"></i></div>`;
  });
  list.innerHTML+=`<div class="story-item" style="opacity:.5" onclick="alert('${lang==='ml'?'കൂടുതൽ നക്ഷത്രം നേടൂ!':'Earn more stars to unlock!'}')"><div style="font-size:2.2rem;width:46px;text-align:center">🔒</div><div style="flex:1"><div style="font-weight:800;font-size:.9rem;color:#111;margin-bottom:2px">${lang==='ml'?'ബോണസ് കഥ':'Bonus Story'}</div><div style="font-size:.72rem;color:#777;margin-bottom:.35rem">${lang==='ml'?'30 നക്ഷത്രം നേടൂ':'Earn 30 stars to unlock'}</div><div class="d-flex gap-1"><span class="xpill xp-red">🔒 ${lang==='ml'?'ലോക്ക്':'Locked'}</span></div></div></div>`;
}
function openStory(idx){
  curStory=idx;curPage=0;
  document.getElementById('storyList').style.display='none';
  document.getElementById('storyReader').style.display='block';
  const sa=getStoryList();
  const s=sa[idx];
  document.getElementById('readerTitle').textContent=s.title;
  document.getElementById('storyHero').textContent=s.emoji;
  document.getElementById('storyHero').style.background=s.bg;
  document.getElementById('totalPgs').textContent=s.pages.length;
  renderPage();
}
function renderPage(){
  const sa=getStoryList();
  const s=sa[curStory];
  document.getElementById('storyBody').textContent=s.pages[curPage];
  document.getElementById('pageNum').textContent=curPage+1;
  document.getElementById('storyProg').style.width=Math.round((curPage+1)/s.pages.length*100)+'%';
  document.getElementById('prevBtn').disabled=curPage===0;
  const nb=document.getElementById('nextBtn');
  if(curPage===s.pages.length-1){nb.innerHTML=T[lang].finishTxt;nb.onclick=finishStory;}
  else{nb.innerHTML=`<span>${T[lang].nextBtnTxt}</span> <i class="bi bi-arrow-right"></i>`;nb.onclick=()=>storyPage(1);}
}
function storyPage(d){
  const sa=getStoryList();
  curPage=Math.max(0,Math.min(sa[curStory].pages.length-1,curPage+d));renderPage();
}
function finishStory(){storiesCompleted=true;addStars(5);alert(T[lang].finishStoryMsg);closeReader();}
function closeReader(){buildStoryList();}
function refreshOpenStory(){
  const sa=getStoryList();
  const s=sa[curStory];
  if(!s)return;
  document.getElementById('readerTitle').textContent=s.title;
  document.getElementById('storyHero').textContent=s.emoji;
  document.getElementById('storyHero').style.background=s.bg;
  document.getElementById('totalPgs').textContent=s.pages.length;
  curPage=Math.max(0,Math.min(s.pages.length-1,curPage));
  renderPage();
}
function readAloud(){
  const sa=getStoryList();
  const txt=sa[curStory].pages[curPage];
  if('speechSynthesis' in window){
    window.speechSynthesis.cancel();
    const u=new SpeechSynthesisUtterance(txt);
    u.lang=lang==='ml'?'ml-IN':'en-IN';
    u.rate=currentAge==='tiny'?.78:currentAge==='big'?.95:.88;
    u.pitch=currentAge==='tiny'?1.2:1;
    window.speechSynthesis.speak(u);
  }
}

/* ══ QUIZ ══ */
function startQuiz(){
  curQ=0;quizScore=0;
  document.getElementById('quizIntro').style.display='none';
  document.getElementById('quizQ').style.display='block';
  const qa=getQuizList();
  document.getElementById('qTotal').textContent=qa.length;
  renderQ();
}
function renderQ(){
  const qa=getQuizList();
  const q=qa[curQ];
  document.getElementById('qNum').textContent=curQ+1;
  document.getElementById('quizProg').style.width=Math.round((curQ+1)/qa.length*100)+'%';
  document.getElementById('qText').textContent=q.q;
  const c=document.getElementById('optsCont');c.innerHTML='';
  q.opts.forEach((o,i)=>{const b=document.createElement('button');b.className='qopt';b.textContent=o;b.onclick=()=>answerQ(i,b);c.appendChild(b);});
}
function answerQ(idx,btn){
  const qa=getQuizList();
  document.querySelectorAll('.qopt').forEach(b=>b.onclick=null);
  const q=qa[curQ];
  if(idx===q.ans){btn.classList.add('correct','pop');quizScore++;addStars(5);}
  else{btn.classList.add('wrong','shake');document.querySelectorAll('.qopt')[q.ans].classList.add('correct');}
  setTimeout(()=>{curQ++;if(curQ<qa.length)renderQ();else showResult();},1100);
}
function showResult(){
  quizCompleted = true;
  const qa=getQuizList();
  document.getElementById('quizQ').style.display='none';
  document.getElementById('quizResult').style.display='block';
  const pct=Math.round(quizScore/qa.length*100);
  document.getElementById('resEmoji').textContent=pct===100?'🌟':pct>=75?'😊':'😅';
  const tt=T[lang].resTitle;
  document.getElementById('resTitle').textContent=pct===100?tt[100]:pct>=75?tt[75]:tt[0];
  document.getElementById('resMsg').textContent=T[lang].resMsg.replace('{s}',quizScore).replace('{t}',qa.length);
  document.getElementById('resStars').textContent=quizScore*5;
}
function refreshQuizScreen(){
  const intro=document.getElementById('quizIntro');
  const question=document.getElementById('quizQ');
  const result=document.getElementById('quizResult');
  if(intro && intro.style.display!=='none'){
    document.getElementById('quizIntroTitle').textContent=T[lang].quizIntroTitle[currentAge];
    document.getElementById('quizIntroSub').textContent=T[lang].quizIntroSub;
  }
  if(question && question.style.display==='block'){
    renderQ();
  }
  if(result && result.style.display==='block'){
    showResult();
  }
}

/* ══ GAMES ══ */
function initGames(){
  document.getElementById('gameTiny').style.display='none';
  document.getElementById('gameMid').style.display='none';
  document.getElementById('gameBig').style.display='none';
  document.getElementById('gamesTitle').textContent=T[lang].gamesTitle[currentAge];
  if(currentAge==='tiny'){document.getElementById('gameTiny').style.display='block';setupDrag();setupNumbers('numGrid','numMsg','numNext1');}
  else if(currentAge==='mid'){document.getElementById('gameMid').style.display='block';setupPairs();setupDrag2();}
  else{document.getElementById('gameBig').style.display='block';buildScramble();setupNumbers('numGrid2','numMsg2','numNext2');}
}

/* --- DRAG DROP --- */
function makeDragSetup(itemsId,zonesId,msgId){
  const di=document.getElementById(itemsId),dz=document.getElementById(zonesId);
  if(!di||!dz)return;
  di.innerHTML='';dz.innerHTML='';dragSrc=null;
  const m=document.getElementById(msgId);if(m)m.style.display='none';
  [...ANIMALS].sort(()=>Math.random()-.5).forEach(a=>{
    const el=document.createElement('div');el.className='drag-item';el.textContent=a.e;el.draggable=true;el.dataset.id=a.id;
    el.addEventListener('dragstart',()=>{dragSrc=a.id;setTimeout(()=>el.style.opacity='.4',0);});
    el.addEventListener('dragend',()=>el.style.opacity='1');
    el.addEventListener('touchstart',()=>dragSrc=a.id,{passive:true});
    di.appendChild(el);
  });
  ANIMALS.forEach(a=>{
    const z=document.createElement('div');z.className='drop-slot';z.dataset.target=a.id;
    z.innerHTML=`<span>${lang==='ml'?a.home_ml:a.home_en}</span>`;
    z.addEventListener('dragover',e=>{e.preventDefault();z.classList.add('over');});
    z.addEventListener('dragleave',()=>z.classList.remove('over'));
    z.addEventListener('drop',e=>{e.preventDefault();z.classList.remove('over');doDrop(z,a,msgId,dz);});
    z.addEventListener('touchend',()=>doDrop(z,a,msgId,dz));
    dz.appendChild(z);
  });
}
function setupDrag(){makeDragSetup('dragItems','dropZones','dragMsg');}
function setupDrag2(){makeDragSetup('dragItems2','dropZones2','dragMsg2');}
function doDrop(zone,target,msgId,dzParent){
  if(dragSrc===target.id){
    zone.classList.add('matched','pop');zone.textContent=ANIMALS.find(x=>x.id===target.id).e;
    const done=dzParent.querySelectorAll('.matched').length;
    if(done===ANIMALS.length){const m=document.getElementById(msgId);m.style.display='block';m.style.background='#DCFCE7';m.style.color='#166534';m.textContent=T[lang].dragDoneMsg;addStars(8);gamesCompleted=true;}
  }else{zone.classList.add('bad','shake');setTimeout(()=>zone.classList.remove('bad','shake'),400);}
  dragSrc=null;
}

/* --- NUMBER TAP --- */
function setupNumbers(gridId,msgId,counterKey){
  const g=document.getElementById(gridId);if(!g)return;
  g.innerHTML='';window[counterKey]=1;
  const nums=[...Array(9)].map((_,i)=>i+1).sort(()=>Math.random()-.5);
  nums.forEach(n=>{
    const b=document.createElement('button');b.className='num-btn';b.textContent=n;
    b.onclick=()=>{
      const nxt=window[counterKey];
      if(n===nxt){
        b.className='num-btn done';b.onclick=null;window[counterKey]++;
        const msg=document.getElementById(msgId);
        if(window[counterKey]>9){msg.textContent=T[lang].numDoneMsg;msg.style.color='#166534';addStars(5);gamesCompleted=true;}
        else msg.textContent=T[lang].numNextMsg.replace('{n}',window[counterKey]);
      }else{b.classList.add('bad');setTimeout(()=>b.classList.remove('bad'),350);}
    };
    g.appendChild(b);
  });
  const msg=document.getElementById(msgId);if(msg){msg.textContent=T[lang].numTapFirst;msg.style.color='#777';}
}

/* --- MEMORY PAIRS --- */
function setupPairs(){
  pairFlipped=[];pairLocked=false;pairMoves=0;
  document.getElementById('pairMoves').textContent=0;
  document.getElementById('pairMsg').textContent=T[lang].pairTapMsg;
  document.getElementById('pairMsg').style.color='#777';
  const g=document.getElementById('pairGrid');g.innerHTML='';
  const deck=[...PAIR_ITEMS].sort(()=>Math.random()-.5);
  deck.forEach((val,i)=>{
    const c=document.createElement('div');c.className='pair-card';c.dataset.val=val;c.dataset.idx=i;c.textContent='?';
    c.onclick=()=>flipCard(c);g.appendChild(c);
  });
}
function flipCard(card){
  if(pairLocked||card.classList.contains('flipped')||card.classList.contains('matched'))return;
  card.textContent=card.dataset.val;card.classList.add('flipped');pairFlipped.push(card);
  if(pairFlipped.length===2){
    pairLocked=true;pairMoves++;document.getElementById('pairMoves').textContent=pairMoves;
    if(pairFlipped[0].dataset.val===pairFlipped[1].dataset.val){
      pairFlipped.forEach(c=>{c.classList.remove('flipped');c.classList.add('matched');});
      pairFlipped=[];pairLocked=false;
      const done=document.querySelectorAll('.pair-card.matched').length;
      if(done===PAIR_ITEMS.length){document.getElementById('pairMsg').textContent=T[lang].pairDoneMsg;document.getElementById('pairMsg').style.color='#166534';addStars(10);gamesCompleted=true;}
    }else{
      pairFlipped.forEach(c=>c.classList.add('wrong'));
      setTimeout(()=>{pairFlipped.forEach(c=>{c.classList.remove('wrong','flipped');c.textContent='?';});pairFlipped=[];pairLocked=false;},900);
    }
  }
}

/* --- WORD SCRAMBLE --- */
function buildScramble(){scrambleWords=[...SCRAMBLES].sort(()=>Math.random()-.5);scrambleIdx=0;loadScramble();}
function loadScramble(){
  if(scrambleIdx>=scrambleWords.length){scrambleIdx=0;scrambleWords.sort(()=>Math.random()-.5);}
  const w=scrambleWords[scrambleIdx];
  scrambleAnswer=w.word;scrambleCurrent=w.word.split('').sort(()=>Math.random()-.5);scrambleSelected=[];
  document.getElementById('scrambleHint').textContent=lang==='ml'?w.hint_ml:w.hint_en;
  renderScramble();document.getElementById('scrambleMsg').style.display='none';
}
function renderScramble(){
  const slots=document.getElementById('scrambleSlots');slots.innerHTML='';
  scrambleAnswer.split('').forEach((_,i)=>{
    const d=document.createElement('span');d.className='letter-slot';
    d.textContent=scrambleSelected[i]!==undefined?scrambleCurrent[scrambleSelected[i]]:'';
    slots.appendChild(d);
  });
  const letters=document.getElementById('scrambleLetters');letters.innerHTML='';
  scrambleCurrent.forEach((l,i)=>{
    const b=document.createElement('button');b.className='letter-btn';b.textContent=l;
    const used=scrambleSelected.includes(i);b.disabled=used;
    b.onclick=()=>{
      if(!used&&scrambleSelected.length<scrambleAnswer.length){
        scrambleSelected.push(i);renderScramble();
        if(scrambleSelected.length===scrambleAnswer.length){
          const formed=scrambleSelected.map(idx=>scrambleCurrent[idx]).join('');
          const msg=document.getElementById('scrambleMsg');msg.style.display='block';
          if(formed===scrambleAnswer){msg.style.background='#DCFCE7';msg.style.color='#166534';msg.textContent=T[lang].scrambleCorrect;addStars(8);gamesCompleted=true;}
          else{msg.style.background='#FEE2E2';msg.style.color='#991B1B';msg.textContent=T[lang].scrambleWrong+scrambleAnswer;}
        }
      }
    };
    letters.appendChild(b);
  });
}
function clearScramble(){scrambleSelected=[];renderScramble();document.getElementById('scrambleMsg').style.display='none';}
function nextScramble(){scrambleIdx++;loadScramble();}

/* ══ REWARDS ══ */
function renderRewards(){
  if(!ageData)return;
  syncStars();
  const c=document.getElementById('offlineList');c.innerHTML='';
  const oa=lang==='ml'?ageData.offline_ml:ageData.offline_en;
  const t=T[lang];
  oa.forEach((task,i)=>{
    const d=document.createElement('div');d.className='offline-row';
    d.innerHTML=`<span style="font-size:1.3rem">${task.icon}</span><div style="flex:1"><div style="font-size:.8rem;font-weight:800;color:#222">${task.txt}</div></div><span style="font-size:.7rem;font-weight:800;color:#92610A;margin-right:.35rem">+${task.stars}⭐</span>${task.done?`<span style="font-size:.78rem;font-weight:800;color:#166534">${t.doneLabel}</span>`:`<button class="btn-brand" style="padding:.28rem .72rem;font-size:.7rem" onclick="claimOffline(${i})">${t.claimBtn}</button>`}`;
    c.appendChild(d);
  });
}
function claimOffline(i){
  const oa=lang==='ml'?ageData.offline_ml:ageData.offline_en;
  oa[i].done=true;addStars(oa[i].stars);renderRewards();
}

/* ══ PARENT ══ */
function openParentOverlay(){
  document.getElementById('parentGate').style.display='block';
  document.getElementById('parentDash').style.display='none';
  document.getElementById('parentPinErr').style.display='none';
  document.getElementById('parentPinInput').value='';
  document.getElementById('parentOverlay').classList.add('show');
  if(ageData&&document.getElementById('pAgeGroup')){
    document.getElementById('pAgeGroup').textContent=lang==='ml'?ageData.name_ml+' ('+ageData.label_ml+')':ageData.name_en+' ('+ageData.label_en+')';
  }
}
function closeParent(){document.getElementById('parentOverlay').classList.remove('show');}
function loginParent(){
  if(document.getElementById('parentPinInput').value==='1234'){
    document.getElementById('parentGate').style.display='none';
    document.getElementById('parentDash').style.display='block';
    renderParentOffline();
  }else{
    document.getElementById('parentPinErr').textContent=T[lang].parentPinErrTxt;
    document.getElementById('parentPinErr').style.display='block';
  }
}
function parentTab(id,btn){
  ['pStats','pLimits','pOffline'].forEach(s=>document.getElementById(s).style.display='none');
  document.getElementById(id).style.display='block';
  document.querySelectorAll('.tab-btn').forEach(b=>b.classList.remove('on'));btn.classList.add('on');
}
function saveSettings(){
  const tl=parseInt(document.getElementById('timeLimitSl').value);
  const bi=parseInt(document.getElementById('breakSl').value);
  timeLimitSec=tl*60;timerSec=timeLimitSec;breakInterval=bi*60;breakTimer=0;
  alert(T[lang].settingsSaved.replace('{t}',tl).replace('{b}',bi));closeParent();
}
function renderParentOffline(){
  if(!ageData)return;
  const c=document.getElementById('pOfflineList');if(!c)return;c.innerHTML='';
  const oa=lang==='ml'?ageData.offline_ml:ageData.offline_en;
  oa.forEach(task=>{
    const d=document.createElement('div');d.className='offline-row';
    d.innerHTML=`<span style="font-size:1.25rem">${task.icon}</span><span style="flex:1;font-size:.78rem;font-weight:700;color:#333">${task.txt}</span><span class="xpill xp-amber">+${task.stars}⭐</span>`;
    c.appendChild(d);
  });
}
