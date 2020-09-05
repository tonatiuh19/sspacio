import React from 'react';
import Bar from './components/nav-bar/Bar';
import Footer from './components/footer/Footer';
import Main from './components/main/Main';
import {Provider} from 'react-redux'
import generateStore from './redux/store'

function App() {
  const store = generateStore()
  return (
      <Provider store={store}>
        <Bar></Bar>
        <Main></Main>
        <Footer></Footer>
      </Provider>
  );
}

export default App;
