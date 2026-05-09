import { useState } from "react";
import Navbar from "./component/navbar";

function App() {
  const [darkmode, setDarkmode] = useState(false);
  return (
    <>
      <Navbar darkmode={darkmode} setDarkmode={setDarkmode} />
      <p className="text-4xl text-blue-500">Portfolio coming soon...</p>
    </>
  );
}

export default App;
