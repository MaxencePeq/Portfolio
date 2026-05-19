import SectionHome from "./component/section/SectionHome";
import SectionGithub from "./component/section/SectionGithub";
import SectionPassionButton from "./component/button/passionButton";
import { section } from "./utils/section";
import ComponentPage from "./component/page";
import { useState } from "react";

type AppProps = {
  AppIsDarkmode: boolean;
};

function App({ AppIsDarkmode }: AppProps) {
  const [darkmode, setDarkmode] = useState(AppIsDarkmode);

  return (
    <ComponentPage
      darkmode={darkmode}
      setDarkmode={setDarkmode}
      content={
        <>
          {section(<SectionHome darkmode={darkmode} />)}
          {section(<SectionGithub darkmode={darkmode} />)}
          {section(<SectionPassionButton darkmode={darkmode} />)}
        </>
      }
    />
  );
}

export default App;
