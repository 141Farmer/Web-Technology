function regex(email){
          const emailregex=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
          return emailregex.test(email);
}

console.log(regex("rifat"));
console.log(regex("rifat@"));
console.log(regex("rifat@rt"));
console.log(regex("rifat@rt."));
console.log(regex("rifat@rt.eryt"));
console.log(regex("rifat@rt.3434"));
console.log(regex("4545@4545.sdertf"));