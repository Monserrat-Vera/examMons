<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menú') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <h1>Hongos</h1>
                        <article>
                            <h3>1.1 Setas</h3>
                            <p class="text">
                                Se trata del tipo de hongo más protético para la mayoría de personas. En realidad el término no hace tanto referencia al ser al completo sino a una de sus partes: <br>la parte más externa, correspondiente a su fructifican y que suele tener forma de paraguas o sombrero.
                                El resto del hongo se encontraría bajo tierra (o bajo la superficie en que esté creciendo). <br>Así, técnicamente podríamos diferenciar entre seta y hongo en el sentido de que la seta es solo una parte de un determinado tipo de hongos. Es importante tener muy en cuenta que no todas ellas son comestibles, pudiendo muchas especies ser venenosas e incluso mortales para nosotros.
                            </p>

                            <img src="{{asset('images/hongoA.png')}}" loading="lazy" >
                        </article>

                        <article>
                            <h3>1.2 Levaduras</h3>
                            <p class="text">
                                Los hongos clasificados dentro del grupo de las levaduras se caracterizan por el modo en que descomponen la materia, siendo este mecanismo la fermentación (si bien no sólo los hongos pueden usarlo). <br>
                                Los hidratos de carbono y azúcares son transformadas en otros elementos, algo que el ser humano ha empleado durante milenios en procesos como la elaboración del pan o la repostería. <br>Se caracterizan también por ser un tipo de hongo de tipo unicelular.
                            </p>

                            <img src="{{asset('images/leva.png')}}" loading="lazy" >
                        </article>

                        <article>
                            <h3>1.3 Moho</h3>
                            <p class="text">
                                Los mohos son un tipo de hongo generalmente de tamaño microscópico que se caracterizan por tener un comportamiento que suele ser destructivo, deteriorando superficies o seres vivos. Suelen estar conformados por masas de filamentos. Sin embargo ello no quiere decir que siempre sean negativos, ya que en algunos casos a partir de ellos han podido generarse medicamentos (siendo el ejemplo más claro la penicilina).
                            </p>


                            <img src="{{asset('images/moho.png')}}" loading="lazy" >
                        </article>
                    </div>
                    <br>
                    <div class="container">
                        <article>
                            <h1>2 Clasificacion segun el efecto a ser humano</h1>
                            <p class="txt2">
                                Otra forma sencilla de clasificar a los hongos no tiene tanto que ver con el
                                hongo en sí sino en los efectos que pueden tener en nosotros o la utilidad que podemos darles. Si bien en este sentido la clasificación no es tanto por la propia entidad sino por sus efectos, esta manera de catalogarlos puede ser beneficiosa de cara a poder separar los que tienen efectos positivos como los que los tienen negativos. <br>
                                Entre estos tipos podemos encontrar los siguientes.
                            </p>
                        </article>

                        <br>
                        <article>
                            <h3>2.1 Comestibles</h3>
                            <pre class="txt2">
                Uno de los grupos que generalmente suele interesar a la mayoría de la población es el de los hongos comestibles, aquellos que resultan aptos
                para el consumo humano (o animal). La mayoría de ellos son muy saludables, teniendo pocas calorías y muchas proteínas y vitaminas. De hecho,
                algunos de ellos son considerados delicatessen, como ocurre con la trufa en este país.
            </pre>
                            <img class="clasific" src="images/hongos_comestibles.jpg" width="300">
                        </article>

                        <br>
                        <article>
                            <h3>2.2 Toxicos</h3>
                            <pre class="txt2">
                    Por contraposición con el anterior, podemos encontrar también diferentes hongos cuyas propiedades pueden deteriorar nuestra salud y capacidades
                    en gran medida o incluso en algunos casos llegar a provocarnos la muerte. Desafortunadamente, algunos de ellos se asemejan a especies comestibles,
                    lo que supone un enorme peligro para aquellas personas que no son capaces de reconocerlos.
                </pre>
                            <img class="clasific" src="images/toxic.jpg" width="300">
                        </article>

                        <br>
                        <article>
                            <h3>2.3Mecinales</h3>
                            <pre class="txt2">
                    Muchos hongos tienen diferentes propiedades que les han hecho importantísimos para el ser humano no solo por ser o no comestibles,
                    sino por poder producir efectos que permiten eliminar o controlar enfermedades. Es lo que ocurrió cuando Alexander Fleming descubrió que
                    el moho Penicillium era capaz de acabar con las bacterias, lo que permitió que se acabara por sintetizar la penicilina.
                </pre>
                            <img class="clasific" src="images/hongos-medicinales.jpg" width="300">
                        </article>

                        <br>
                        <article>
                            <h3>2.4 Parasitos</h3>
                            <pre class="txt2">
                    Algunos hongos también tienen un comportamiento parásito, alimentándose de tejidos de seres vivos.
                    Se trata del tipo de hongo que nos suele causar enfermedades, a menudo dermatológicas pero que también pueden ocurrir
                    en otros tejidos como la boca o la vagina e incluso generar infecciones severas. Los hongos de la familia cándida son un ejemplo de ello.
                </pre>
                            <img class="clasific" src="images/asco.png" width="300">
                        </article>

                        <br>
                        <article>
                            <h3>2.5 Alucinogenos</h3>
                            <pre class="txt2">
                    Muchos hongos han sido empleados desde la antigüedad por su capacidad para generar estados alterados de conciencia.
                    En algunos contextos se empleaban en rituales religiosos, si bien en la actualidad es más frecuente que el consumo de setas alucinógenas
                    se realice en un contexto recreativo. Pero no solo eso, sino que en muchos casos los hongos con estas propiedades están siendo estudiados
                    de cara analizar posibles usos en el tratamiento de trastornos mentales o incluso orgánicos. En este tipo de hongos destaca el género de
                    setas Psilocybe, cuyos representantes contienen sustancias psicoactivas como la psilocibina, una de las drogas alucinógenas más consumidas.
                </pre>
                            <img class="clasific" src="images/droga.png" width="300">
                        </article>
                    </div>

                    <div class="container">
                        <article>
                            <h1>3 Clasificacion ecologica</h1>
                            <p class="txt3">
                                Otra manera de clasificar a los diversos hongos es a través de su manera de sobrevivir y
                                de alimentarse, de su función o papel a nivel ecológico en relación a su vinculación con el
                                resto de seres. En este sentido podemos encontrar tres grandes grupos.
                        </article>
                        <br>
                        <article>
                            <h3>3.1 Hongos Saprofitos</h3>
                            <pre class="txt3">
                Este tipo de hongos se caracterizan por basar su subsistencia en el hecho de nutrirse de restos de seres vivos
                a través de una digestión externa, llevada a cabo fuera de las células del hongo. Este es uno de los grupos más
                relevante a la hora de descomponer la materia orgánica de cadáveres y heces y la hora de permitir que el suelo permanezca fértil.
                Algunos de ellos únicamente reciben nutrientes de este modo, mientras que otros hongos únicamente recurren a este
                tipo de nutrición durante una fase de su desarrollo.
            </pre>

                        </article>
                        <br>
                        <article>
                            <h3>3.2 Hongos Parasitos</h3>
                            <pre class="txt3">
                Como hemos visto anteriormente los hongos parásitos son aquellos que basan su subsistencia en la dependencia de un
                anfitrión o portador, el cual puede verse perjudicado en menor o mayor manera por la existencia de su huésped y para
                el que la existencia del hongo no supone ningún tipo de ventaja.
            </pre>

                        </article>
                        <br>
                        <article>
                            <h3>3.3 Hongos Simbioticos</h3>
                            <pre class="txt3">
                Este tipo de hongos se caracterizan por depender de un sujeto o ente que los hospeda, si bien la relación con este
                resulta positiva y beneficiosa para ambos organismos. Por ejemplo, es posible que la interacción entre ambos permita
                que los dos seres se alimenten. Dentro de este tipo de hongos podemos encontrar diferentes subtipos.
                Tal vez el caso más conocido y habitual es el de las micorrizas, en que un hongo establece una relación simbiótica con las
                raíces de una planta. Mientras que el hongo se nutre de los hidratos de carbono y vitaminas de la planta, la planta obtiene
                de este minerales y agua.
            </pre>
                            <img class="clasific" src="images/param.png" width="300">
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
