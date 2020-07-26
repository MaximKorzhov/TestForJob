
4. Упростить 2 говнокода:
    #1
    public double getPayAmount() {
double result;
      if (isDead){
          result = deadAmount();
      }
      else {
          if (isSeparated){
              result = separatedAmount();
          }
          else {
              if (isRetired){
                  result = retiredAmount();
              }
              else{
                  result = normalPayAmount();
              }
          }
      }
      return result;
    }
/_______________________________________
//Решение
public double getPayAmount() {
  if (isDead){
      return deadAmount();
  }
  if (isSeparated){
      return separatedAmount();
  }
  if (isRetired){
      return retiredAmount();
  }
  return normalPayAmount();
}
/_____________________________________________
//Решение
    #2
    if (date.before(SUMMER_START) || date.after(SUMMER_END)) {
        charge = quantity * winterRate + winterServiceCharge;
    }
    else {
        charge = quantity * summerRate;
    }
/______________________________________________
if (isSummer(date)) {
    charge = summerCharge(quantity);
}
else {
    charge = winterCharge(quantity);
}