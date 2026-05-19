/**
 * Turn boolean into text for dark/light mode
 * @param mode : Boolean 1 : darkmode 0 : lightmode
 * @returns
 */
export function getMode(mode: boolean) {
  if (mode) {
    return "dark";
  } else {
    return "light";
  }
}

/**
 * Turn boolean into the perfect text-color for the gitChart
 * @param mode : Boolean 1 : darkmode 0 : lightmode
 * @returns
 */
export function getGitChartTextColor(mode: boolean) {
  if (mode) {
    return "white";
  } else {
    return "#2563EB";
  }
}

export function getLeftBorderColor(mode: boolean) {
  if (mode) {
    return "border-[#06C]";
  } else {
    return "border-white";
  }
}
