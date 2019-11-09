function sortAlphabet(str) {
    return [...str].sort((a, b) => a.localeCompare(b));
  }
  
  console.log(sortAlphabet("hello"));