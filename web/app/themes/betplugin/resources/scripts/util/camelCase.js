/**
 * Converts a string to camel-case
 * @param {string} str String that isn't camel-case, e.g., CAMeL_CaSEiS-harD
 * @return {string} String converted to camel-case, e.g., camelCaseIsHard
 */
export default function camelCase(str) {
  // Get the first character of the string and convert it to lower case
  const firstChar = str.charAt(0).toLowerCase();
  // Replace all non-word characters (i.e., anything that's not a letter, number or underscore) with a pipe character
  const parts = str.replace(/[\W_]/g, '|').split('|');
  // For each part, convert the first character to upper case and concatenate the rest of the string
  const camelParts = parts.map(part => `${part.charAt(0).toUpperCase()}${part.slice(1)}`);
  // Join all the parts together to form the camel-cased string, starting from the second part (i.e., without the first character)
  const camelStr = camelParts.join('').slice(1);
  // Add the first character back to the beginning of the string and return the result
  return `${firstChar}${camelStr}`;
}
