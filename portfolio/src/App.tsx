import { useState } from "react";
import Navbar from "./component/navbar";
import Darkbox from "./component/darkbox";

function App() {
  const [darkmode, setDarkmode] = useState(true);

  let bgColor = "bg-[#FEFEFE]";
  if (darkmode) {
    bgColor = "bg-[#181E37]";
  }

  return (
    <div className={`${bgColor} h-screen w-screen flex flex-col`}>
      <Navbar darkmode={darkmode} setDarkmode={setDarkmode} />
      <div className="py-[6rem] flex flex-col items-center h-full">
        <Darkbox
          darkmode={darkmode}
          content={
            <>
              <p className="text-4xl text-white">Portfolio coming soon...</p>
            </>
          }
        />
      </div>
    </div>
  );
}

export default App;
