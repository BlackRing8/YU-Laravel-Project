// script swtich mode
if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    document.documentElement.classList.add("dark");
  } else {
    document.documentElement.classList.remove("dark");
  }
  
  var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
  var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
  
  // Change the icons inside the button based on previous settings
  if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    themeToggleLightIcon.classList.remove("hidden");
  } else {
    themeToggleDarkIcon.classList.remove("hidden");
  }
  
  var themeToggleBtn = document.getElementById("theme-toggle");
  
  themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");
  
    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
      if (localStorage.getItem("color-theme") === "light") {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
      } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
      }
  
      // if NOT set via local storage previously
    } else {
      if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
      } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
      }
    }
  });

  // script tulisan pada home
  function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }
  
  const phrases = ["Welcome To YourUniverse"];
  const phrases2 = ["engineering student at a university in Indonesia. Nice to meet you."];
  const el = document.getElementById("typewriter");
  const el2 = document.getElementById("typewriter2");
  
  let sleepTime = 30;
  let sleepTime2 = 150
  
  let curPhraseIndex = 0;
  
  const writeLoop = async () => {
    while (true) {
      let curWord = phrases[curPhraseIndex];
  
      for (let i = 0; i < curWord.length; i++) {
        el.innerText = curWord.substring(0, i + 1);
        await sleep(sleepTime2);
      }
  
      await sleep(sleepTime * 100);
      
      for (let i = curWord.length; i > 0; i--) {
        el.innerText = curWord.substring(0, i - 1);
        await sleep(sleepTime2);
      }
  
      await sleep(sleepTime * 20);

    }
    
  };
  const writeloop2 = async () => {
    while (true) {

        let curWord = phrases2[curPhraseIndex];
        
        for (let i = 0; i < curWord.length; i++) {
            el2.innerText = curWord.substring(0, i + 1);
            await sleep(sleepTime);
        }
    
        await sleep(sleepTime * 460);

        for (let i = curWord.length; i > 0; i--) {
            el2.innerText = curWord.substring(0, i - 1);
            await sleep(sleepTime);
          }
      
          await sleep(sleepTime * 20);
        
    }
};

  
  
  writeLoop();
  writeloop2();