import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Language from './Language';

class languages extends Component {
    constructor() {
        super()
    }

    render() {

        const { languages, selectLanguage } = this.props;

        return(
            <div className="row">
                {
                    languages.map((language, index) => { 
                        return <Language 
                        key={index} 
                        language={language} 
                        selectLanguage={selectLanguage}
                        selectedLanguages={this.props.selectedLanguages}/>
                    })
                }
            </div>
        )
    }
}

export default languages